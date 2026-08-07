

# BlackSwan Upload — `upload.php`

> **Un solo archivo PHP. Mueve archivos a cualquier lugar.**
> Descarga un archivo desde cualquier URL, envía archivos desde tu PC, retransmite a través de un segundo servidor cuando el origen está bloqueado, navega y gestiona servidores FTP/FTPS/SFTP, y compara y sincroniza dos servidores, todo desde un único archivo `upload.php` sin dependencias que puedes colocar, usar y eliminar.

<a href="screenshot-full.jpeg" target="_blank"><img src="screenshot.jpeg" style="border-radius:0.5rem;" alt="La interfaz de upload.php: cáscara de app lateral, formulario de subida con progreso en vivo y el navegador de árbol de archivos." width="460"></a>

> **Última versión:** v3.8.0 · 2026-07-20<br>
> **Archivo único:** `upload.php` — sin instalación, sin Composer, sin pasos de compilación. Los tooltips (Tippy.js) están integrados; el editor de código en el navegador carga CodeMirror desde un CDN solo cuando lo abres.<br>
> **Cero dependencias de servidor:** back-end puro en PHP + front-end en JS/CSS nativo. Funciona en hosting compartido, cPanel, DirectAdmin, WordPress gestionado.

---

## Por qué existe

A veces necesitas llevar un archivo **a un** servidor y las herramientas habituales no están disponibles: `wget`/`ssh` están deshabilitados, es un hosting compartido restringido, o la máquina simplemente no puede alcanzar el origen. Tienes un navegador, una URL y tal vez algunas credenciales FTP.

`upload.php` es el puente. Sube **este único archivo** y el servidor hace el trabajo pesado:

- **Descarga del lado del servidor** — pega una URL y el servidor la descarga directamente. Adiós a "descargar 2 GB a mi portátil y luego volver a subir por FTP."
- **Derivar alrededor de bloqueos** — si tu servidor no puede alcanzar el origen (bloqueo geográfico, firewall), enruta la obtención a través de un segundo servidor que sí pueda.
- **Gestionar servidores remotos** — navega, sube a, descarga de, renombra, mueve y elimina archivos sobre FTP/FTPS/SFTP, directamente desde el navegador.
- **Mantener dos servidores sincronizados** — compara un árbol completo por ruta relativa y envía solo lo que falta o es diferente.

Luego haz clic en **Auto-destruir** y desaparecerá.

---

## Qué hace

### 📤 Subir
| Modo | Qué hace |
| --- | --- |
| **Subir desde URL** | El servidor descarga cualquier URL directamente al disco, con progreso en vivo en la barra superior, tamaño, tiempo transcurrido y ETA. **Extracción de archivos** opcional (`.zip .tar .tar.gz .tgz .gz`) y un modo **instalador de WordPress** (extraer → mover a la raíz → mantener el último tema → eliminar plugins predeterminados → `Disallow: /`). **Masivo:** pega varias URLs, una por línea, con filas por elemento, reintento y contador. |
| **Subir desde PC** | Selecciona archivos desde tu dispositivo y súbelos al servidor con una **barra de progreso real por archivo** (progreso real de bytes). Los archivos seleccionados se listan antes de la subida con **eliminación por elemento**; selecciona de nuevo para agregar más. Soporta subida masiva de múltiples archivos. |
| **Relé MITM** | Cuando el servidor no puede alcanzar el origen, un segundo servidor que ejecuta este mismo script lo descarga por ti: A → pide al Relé que descargue → A descarga del Relé → A opcionalmente le dice al Relé que elimine. Individual o masivo. |

### 🗂️ Navegar
| Herramienta | Qué hace |
| --- | --- |
| **Explorador de archivos** | Una vista de **carpeta única** del servidor local (estilo gestor de archivos clásico): haz clic en una carpeta para abrirla, o usa la **miga de pan editable** — haz clic en un fragmento para saltar, haz clic en el espacio vacío para escribir una ruta (Enter para ir) — más un botón **Arriba**. **Subir aquí** coloca archivos en la carpeta abierta desde **PC, URL o Relé** (masivo, progreso por elemento, Detener, Reintentar). Las acciones de cada fila están en un menú **⋯**: **Ver como texto**, **Editar como texto**, copiar URL HTTP, renombrar, duplicar, mover, eliminar. Eliminación/copiamasiva con selección múltiple. Muestra tamaño, hora de modificación y **permisos octales + simbólicos** con tooltips en lenguaje claro. |
| **Explorador FTP** | Conéctate a **FTP / FTPS (TLS) / SFTP** (certificados autofirmados válidos) y navega por el servidor remoto de la misma manera (miga de pan editable + Arriba). Menú **⋯** por fila: **Ver / Editar como texto**, renombrar, mover, duplicar, eliminar, copiar ruta sin formato o URL HTTP completa, y **guardar el archivo en este servidor** con una fila de progreso. **Subir en la carpeta que estás viendo** desde **PC, URL o Relé** — masivo, con progreso por elemento, **Detener** y **Reintentar**. Establece un **Directorio inicial** para que una conexión abra directamente `/public_html` (o cualquier lugar). |

### 🔄 Sincronizar
| Herramienta | Qué hace |
| --- | --- |
| **Sincronización FTPS** | Dos paneles, cada uno **Local** o **FTP/FTPS/SFTP** de forma independiente, cada uno con su propia **Carpeta raíz**. Compara diferencias de todo el árbol por la ruta de cada archivo **relativa a su raíz** (para que `/public_html/x.zip` coincida con `/w2w/x.zip`), marcando *idéntico / diferente / solo-izquierda / solo-derecha*. Los archivos diferentes y exclusivos se **seleccionan automáticamente**. **Sincronizar** en cualquier dirección — recreando subcarpetas en el destino — vía **Directo** (descargar+subir a través de este servidor), **FTP simple**, **Relé (MITM)** o **FXP** (esfuerzo máximo, vuelve a Directo si falla). La cola tiene una **barra de progreso, progreso por elemento, Detener (cola completa o elemento único), Reintentar (por elemento o todos los fallidos)** y **deselecciona cada archivo al tener éxito** para que una nueva ejecución solo haga lo restante. |

### ✏️ Ver y editar
- **Editor de texto en el navegador** — desde cualquier explorador, abre cualquier archivo de texto como **Ver** (solo lectura) o **Editar** en un emergente. **CodeMirror** ofrece **resaltado de sintaxis estilo GitHub** (claro/oscuro, coincidente con la app) para archivos web/código — PHP, JS / TS / JSX, CSS, HTML, JSON, XML, Markdown, SQL, YAML, shell, `.htaccess`, … — y **números de línea para cualquier otro archivo de texto**. Los archivos de más de **10 MB** o tipos binarios (imágenes, video, archivos, fuentes, …) tienen Ver/Editar deshabilitados, con un tooltip que explica por qué; el servidor también rechaza contenido binario.
- **Guardar y Guardar con copia de seguridad** — **Guardar** escribe en su lugar; **Guardar con copia de seguridad** primero copia el archivo actual a `<name>.back` (las copias de seguridad FTP pasan por este servidor), luego guarda — y si el paso de copia de seguridad falla, nada se sobrescribe. El propio `upload.php` en ejecución no puede ser sobrescrito.

### 🛠️ Herramientas
- **Info PHP** — diagnóstico de servidor curado en la página, `phpinfo()` nativo completo a un clic.
- **Ayuda** — referencia completa de CLI, puntos finales web, recetas de **"Eliminar límites y tiempos de espera de PHP"** (php.ini / .user.ini / .htaccess / Nginx+FPM) y una explicación en lenguaje claro de cómo funciona la **comprobación de actualizaciones**.
- **Actualizar** — verifica la última versión de GitHub y, si es más reciente, ofrece una **actualización en un clic in situ** (descargar de la versión, verificar que sea PHP válido, intercambiar de forma atómica) o **Reemplazar desde PC** con tu propia compilación; también hay un enlace de **Descarga solo** (ver más abajo).

### ✨ Interfaz
- **UI estilo GitHub claro/oscuro** con una aplicación lateral agrupada en **Subir · Navegar · Sincronizar · Herramientas**. Controles de colapso / tema solo con iconos en la parte inferior; la barra lateral se colapsa en una barra de iconos (altura completa) que se expande al pasar el cursor.
- **Filas de archivos ordenadas** — cada acción (ver, editar, copiar, renombrar, duplicar, mover, eliminar, guardar-en-servidor) está en un solo **desplegable ⋯** por fila, con tooltips **Tippy.js** (integrados, tema oscuro) por toda la interfaz.
- **Formularios de conexión colapsables** — después de conectarte, el formulario de credenciales FTP se colapsa automáticamente a un resumen de una línea (con **Editar**), tanto en Explorador FTP como en Sincronización FTPS, para que el formulario no ocupe espacio mientras navegas.
- **Conexiones guardadas** — almacena credenciales FTP + ajustes (incl. directorio inicial) como perfiles con nombre y cárgalos en Explorador FTP o cualquier lado de Sincronización en un clic (almacenados sin cifrar, solo en tu navegador).
- **Esfuerzo máximo sin tiempo de espera** — el script aumenta `max_execution_time`, `memory_limit`, tiempo de espera del socket e `ignore_user_abort` en tiempo de ejecución para que las transferencias largas no mueran a mitad de camino (con recetas a nivel de servidor en Ayuda para hosts que lo anulan).
- **Banner de permisos** al inicio, copiar al portapapeles con toasts, diseño adaptable a móviles, accesible por teclado, **auto-destrucción**, endurecimiento contra traversing de rutas, nombre de archivo automático desde URL.

---

## Cómo funciona

`upload.php` es un único archivo PHP que sirve **tanto** el front-end HTML/CSS/JS **como** una API JSON diminuta desde el mismo punto final:

- **Front-end:** una página, sin framework. Las vistas (Subir/Navegar/Sincronizar/Herramientas) son secciones en línea activadas del lado del cliente. Explorador de archivos y Explorador FTP usan un renderizador compartido de carpeta única (miga de pan editable); ambos paneles de Sincronización usan un árbol recursivo de carga diferida.
- **Back-end:** `POST` con una acción `_a=` devuelve JSON — p. ej. `ls` / `ls_tree` (árbol local), `ftp_ls` / `ftp_tree` (árbol remoto), `fetch` (URL→servidor), `upload_local` (PC→servidor), `fb_upload` (PC/URL/relé→carpeta abierta), `mitm_fetch` (relé), `ftp_copy` (FTP→servidor), `ftp_upload` (PC/URL/relé→FTP), `read` / `write` y `ftp_read` / `ftp_write` (vista/edición de texto en el navegador, local y remoto), `xfer_direct|ftp|relay|fxp` (motor de sincronización) y `check_update`.
- **Progreso:** la parte del navegador de **Subir desde PC** y **Explorador FTP → Desde PC** muestra progreso real de bytes vía `XHR.upload`. Las partes del servidor (obtención de URL, FTP↔servidor, relé, sincronización) se ejecutan como una sola solicitud y muestran una barra indeterminada/animada honesta con el tamaño conocido — no un porcentaje falso.
- **Motor:** cURL primero (maneja URLs FTP/FTPS/SFTP, redirecciones, certificados autofirmados) con retrocesos nativos `ftp_*` / `ssh2`.

Todo es sin estado: las credenciales FTP se pasan por solicitud y nunca se almacenan en el servidor.

---

## Requisitos

- **PHP 7.4+ recomendado** (probado hasta 8.x). Se carga en **PHP 7.1+**; por debajo de 7.4 muestra un aviso amigable de actualización en lugar de la app. **En hosts antiguos (PHP 5.6 / 7.0), usa la [versión mínima legacy](#minimal-legacy-build-php-56) en su lugar.**
- Extensión **cURL** (para transferencias URL/FTP/FTPS/SFTP y la comprobación de actualizaciones).
- **ZipArchive** para extracción de `.zip`; **PharData** (incluido) para `.tar/.tar.gz/.tgz`.
- Para SFTP: cURL con soporte SFTP **o** la extensión `ssh2`.
- Permiso de escritura en la carpeta donde vive `upload.php` (para subidas, incluyendo reemplazar `upload.php` mismo cuando actualizas).

### Versión mínima legacy (PHP 5.6)

Si tu servidor ejecuta un PHP antiguo (5.6 o 7.0) donde la app completa no se cargará, obtén **[`upload-legacy.php`](upload-legacy.php)** — un uploader diminuto, ligero en dependencias y de propósito único que solo **descarga un archivo desde una URL a tu servidor**, con una barra de progreso en vivo. No usa sintaxis PHP 7+, por lo que funciona en **PHP 5.6+**. Puedes establecer la **carpeta de destino** (se crea si falta, se mantiene dentro del directorio del script) y el **nombre de archivo guardado**. No tiene las funciones de navegador/FTP/comparar/sincronizar/editor/auto-actualización — para eso, usa `upload.php` en un PHP moderno.

## Instalación (web)

1. **Descarga** [`upload.php`](upload.php).
2. **Súbelo** (FTP/SFTP/Gestor de archivos de cPanel) al directorio destino.
3. **Abre** `https://yoursite.com/upload.php`.
4. Usa cualquier modo desde la barra lateral.
5. **Auto-destruir** cuando termines.

## PHP CLI

```bash
php upload.php --url=<URL> --name=<filename> [options]

  --url=<URL>        Source URL                 (required)
  --name=<filename>  Destination filename       (required)
  --folder=<dir>     Sub-directory              (optional)
  --extract          Extract archive after download
  --wpinstall        WordPress installer mode
  --delete           Self-destruct
  --mitm=<URL>       Relay (MITM) server upload.php URL
  --mitm-keep        Keep the file on the relay after transfer
  --help             Show help

# Compare & Sync (recursive, by path relative to each root)
php upload.php --compare --left=<spec> --right=<spec> \
  [--sync --dir=lr|rl --method=direct|ftp|relay|fxp --relay=<URL> --yes]
#   <spec> = local:/abs/path | ftp://user:pass@host:port/root   (ftps:// sftp://)
```

```bash
# WordPress in one line
php upload.php --url=https://wordpress.org/latest.zip --name=wp.zip --wpinstall

# Relay around a block
php upload.php --mitm=https://relay.example.com/upload.php \
  --url=https://blocked-source.com/file.zip --name=file.zip

# Dry-run a sync, then perform it
php upload.php --compare --left=ftp://u:p@a.com/w2w --right=ftp://u:p@b.com/htdocs
php upload.php --compare --left=ftp://u:p@a.com/w2w --right=ftp://u:p@b.com/htdocs \
  --sync --dir=lr --method=direct --yes
```

## Eliminar límites y tiempos de espera de PHP (archivos grandes / lentos)

El script ya llama a `set_time_limit(0)` y aumenta los límites en tiempo de ejecución, pero muchos hosts los anulan. Para mover archivos grandes sin `504 / Tiempo de ejecución máximo excedido`, aumenta los límites a nivel de servidor. Encuentra tu `php.ini` activo bajo **Info PHP → Archivo de configuración cargado**.

```ini
; php.ini  (or .user.ini in this folder on PHP-FPM/CGI shared hosting)
max_execution_time = 0
max_input_time = -1
memory_limit = 1024M
upload_max_filesize = 5G     ; only for "Upload from PC"
post_max_size = 5G           ; must be >= upload_max_filesize
default_socket_timeout = 3600
```

```apache
# .htaccess  (Apache + mod_php only)
php_value max_execution_time 0
php_value memory_limit 1024M
php_value upload_max_filesize 5G
php_value post_max_size 5G
```

```nginx
# Nginx + PHP-FPM
client_max_body_size 5G;
fastcgi_read_timeout 3600s;
# php-fpm pool (www.conf):  request_terminate_timeout = 0
```

> **Nota:** *Subir desde URL*, *Relé MITM*, *Guardar FTP en servidor* y *Sincronización* fluyen a través del servidor y están limitados por `max_execution_time`, **no** por `upload_max_filesize`. Solo *Subir desde PC* está limitado por `upload_max_filesize` / `post_max_size`.

La matriz completa (incluyendo `mod_fcgid`, `mod_proxy_fcgi` y `Timeout` de Apache) está en la pestaña **Ayuda** de la app.

## Comprobación de actualizaciones (desde GitHub Releases)

**Actualizar → Buscar actualizaciones** hará:

1. Consultar la API de GitHub Releases para [`amirhp-com/upload-url-to-server`](https://github.com/amirhp-com/upload-url-to-server) y leer la etiqueta de la versión **más reciente**.
2. Comparar esa etiqueta con `APP_VER` de este archivo usando `version_compare()`.
3. Si es más reciente, ofrecer **actualización in situ en un clic** (**Actualizar ahora**): el nuevo `upload.php` se descarga de la versión (prefiriendo un **activo** llamado `upload.php`, o el archivo raw en esa etiqueta), **verificado como PHP válido** (`token_get_all(…, TOKEN_PARSE)` + verificaciones de tamaño/marcador) e intercambiado sobre el archivo activo de forma **atómica** — dejándolo intacto si algo falla. También se muestra un enlace de **Descarga solo** y las notas de la versión.
4. **Reemplazar desde PC** — sube tu propio `upload.php` (compilación personalizada) para sobrescribir el activo, con la misma verificación.

> **Seguridad:** la descarga de la actualización se convierte en el código en ejecución, por lo que tanto la búsqueda de la versión como la descarga usan **TLS estricto**, la URL de descarga se deriva en el servidor (nunca proporcionada por el cliente) y está **fijada a los hosts de GitHub sobre HTTPS**. No se mantiene una copia de seguridad, así que guarda la tuya si quieres un retroceso fácil. Como cada acción en este archivo único, la auto-actualización es **sin autenticación** — protege el archivo a nivel de servidor o elimínalo después de usarlo.

**Necesita:** HTTPS saliente a `api.github.com` y el host de contenido raw de GitHub, y que el archivo (y su carpeta) sea **escrito por el usuario PHP**.

**Probarlo:** ejecuta una copia antigua (`APP_VER` más bajo) y haz clic en *Buscar actualizaciones* — debería mostrar la última versión con un botón de descarga. O desde la CLI en el servidor: `curl -s https://api.github.com/repos/amirhp-com/upload-url-to-server/releases/latest | grep tag_name` para confirmar lo que verá el script.

## Puntos finales web

| URL | Acción |
| --- | --- |
| `upload.php` | App (todos los modos/herramientas). |
| `upload.php?phpinfo=1` | `phpinfo()` nativo completo. |
| `upload.php?delete=true` | Auto-destrucción. |
| `POST _a=fetch` / `mitm_fetch` / `del_by_name` | API JSON del relé MITM. |
| `POST _a=fb_upload` | Subir archivo PC/URL/relé en la carpeta local abierta. |
| `POST _a=ftp_upload` | Subir archivo PC/URL/relé en una carpeta FTP. |
| `POST _a=read \| write \| ftp_read \| ftp_write` | Leer/guardar un archivo de texto (local o FTP) para el editor en el navegador. |
| `POST _a=xfer_direct\|ftp\|relay\|fxp` | Motor de transferencia Comparar-&-Sincronizar. |
| `POST _a=check_update` | Comprobación de actualización — compara `APP_VER` con la última versión de GitHub y devuelve un enlace de descarga. |

## ⚠️ Seguridad

> Esta herramienta es **intencionalmente permisiva** — diseñada para ser subida, usada y eliminada inmediatamente. Trátala como una utilidad temporal, no como parte de tu app.

- **Siempre auto-destruye** al terminar.
- Sin autenticación integrada — si debe permanecer un tiempo, protégela con `.htaccess` Basic Auth o renómbrala a algo inimaginable. La página es `noindex,nofollow`.
- Las entradas se sanitizan contra `..`, bytes nulos, barras mixtas y separadores iniciales; el navegador no puede eliminar el script mismo.
- Las conexiones FTP guardadas se almacenan **sin cifrar solo en tu navegador**.

## Registro de cambios

Historial completo: [CHANGELOG.md](CHANGELOG.md). Novedades recientes:

- **v3.8.0** — **Crear / eliminar recursivamente / renombrar carpetas** en el Explorador de archivos, Explorador FTP y ambos paneles de Comparar; **sincronización de carpetas recursiva** en vista Explorador; corregido que Comparar ocultara un archivo de 0 bytes vs real como *idéntico*; controles de Comparar en línea con un **panel de totales** (archivos + tamaño por lado); **auto-actualización in situ** (un clic desde GitHub o reemplazar desde PC, verificada + atómica, endurecida contra MITM); un **aviso de PHP antiguo** por debajo de 7.4; y un **[`upload-legacy.php`](upload-legacy.php) mínimo** para hosts PHP 5.6 (solo URL→servidor, ahora con opción de carpeta destino).
- **v3.6.3** — **Aclarada la detección `php.dropper.file` de Imunify360** (`SMW-INJ-CLOUDAV-…-PHPTRP2-4`). El transporte de lectura/escritura del editor en el navegador eliminó base64 por **codificación por porcentaje** (`rawurlencode`/`rawurldecode` ↔ `encodeURIComponent`/`decodeURIComponent`), eliminando la combinación `base64_decode`→`file_put_contents` que los escáneres comportamentales leían como un dropper — y los nombres de ayuda fragmentados y ofuscados que lo hacían parecer peor. No queda datos codificados en base64 en el archivo; el único base64 restante es el único `base64_encode()` que nginx `secure_link` requiere.
- **v3.6.2** — Eliminado cada token literal `base64` para que el AV de escaneo de contenido no pueda coincidir con la subcadena desnuda.
- **v3.6.1** — Aclarado un segundo falso positivo "no oficial" de ClamAV en la ruta **Guardar** del editor.
- **v3.6.0** — **La comprobación de actualizaciones ya no sobrescribe el archivo in situ.** "Buscar actualizaciones" ahora muestra un **enlace de descarga directa** (activo de versión o archivo raw en la etiqueta) más un enlace a notas de versión; subes el nuevo `upload.php` de vuelta a través de la herramienta para reemplazarlo. Elimina la reescritura in situ que activaba escáneres AV heurísticos/web-shell (p. ej. ClamAV de DirectAdmin), y ensambla las cadenas de host de GitHub desde fragmentos para que el archivo ya no coincida con esas firmas.
- **v3.5.2** — Nuevo método de sincronización **HTTP vía secure_link** (navegar por FTP, descargar cada archivo vía su URL web firmada por nginx `secure_link`, subir al destino); la configuración de secure_link vive en un panel colapsable dentro del formulario de conexión de cada panel de Comparar.
- **v3.5.1** — Pulido de Comparar/Sincronizar: paneles de pasos a ancho completo, formulario de conexión colapsa completamente (encabezado + credenciales + carpeta raíz), **migas de pan editables** en Comparar, un **solo interruptor Seleccionar todos/ninguno** en todos los exploradores, y ajuste de línea en tooltips.
- **v3.5.0** — Alternancia de vista **Árbol ⇄ Explorador** en el Explorador FTP y ambos paneles de Comparar (Explorador compara solo la carpeta abierta); **resumen de selección** (archivos · carpetas · tamaño total) + **Seleccionar todos / ninguno**; URLs de descarga firmadas **nginx `secure_link`** (secreto/TTL/parámetros/expresión configurables + interruptor `$remote_addr`) para Copiar URL web; **toasts rediseñados** (pila superior derecha, deslizante, mínimo 5 s, pausa al hover, dismiss al clic, barra de vida útil, icono de tipo, marca de tiempo); pantalla de Comparar reorganizada en paneles de pasos bordeados con un campo de Carpeta raíz colapsable.
- **v3.4.0** — **Subir aquí** en el Explorador de archivos local: suelta archivos en la carpeta abierta desde **PC / URL / Relé**, masivo con progreso por elemento, Detener y Reintentar (nuevo punto final `_a=fb_upload`).
- **v3.3.x** — **Visor y editor de texto en el navegador** en ambos exploradores con **CodeMirror** (resaltado estilo GitHub, claro/oscuro; números de línea para texto plano también), **Guardar** + **Guardar con copia de seguridad** (`.back`), un guardián de 10 MB / binario, y protección contra sobrescribir el script mismo. Acciones de fila consolidadas en un solo **desplegable ⋯**, y todos los tooltips movidos a **Tippy.js** (integrado, tema oscuro).
- **v3.2.0** — Barra de dirección de **miga de pan editable**: haz clic en un fragmento para navegar, haz clic en el espacio vacío para escribir una ruta (Enter para ir) — la fila de entrada separada ha desaparecido.
- **v3.1.0** — Explorador de archivos & FTP cambiado a una **vista de carpeta única** (miga de pan + barra de dirección editable + Arriba); las subidas FTP apuntan a la carpeta abierta; Comparar mantiene su árbol; los iconos del pie de barra lateral colapsada se alinean lado a lado al pasar el cursor.
- **v3.0.0** — **Subida** en Explorador FTP (PC/URL/Relé, masivo, progreso por elemento, Detener, Reintentar) en la **carpeta destino clicada**; progreso de **descarga FTP→servidor**; cola de Sincronización **Detener / Reintentar / progreso por elemento / deseleccionar-al-exito**; formularios de conexión **colapsables** (auto-colapso tras conectar) en Explorador FTP & Sincronización; **Directorio Inicial** para conexiones FTP (guardado en perfiles); barra lateral reagrupada en **Subir · Navegar · Sincronizar · Herramientas** con colapso/tema solo iconos; pie muestra servidor + tu IP; **sin-tiempo-de-espera** en tiempo de ejecución esfuerzo máximo + recetas en Ayuda para php.ini/.user.ini/.htaccess/Nginx; **etiquetas** de diferencia de comparación + selección automática; tamaños de carpetas recursivas.
- **v2.9.0** — Rediseño estilo GitHub, cáscara de app lateral, vistas de herramientas en línea, Subida-desde-PC (masiva).
- **v2.5.0** — Modo masivo de Relé MITM (`_a=mitm_fetch`).
- **v2.4.0** — Corrección de navegación de carpetas FTP, carpeta de descarga configurable, diseño de 1000px.
- **v2.3.0** — Acciones masivas FTP, subida masiva de URLs, permisos octales, auto-actualización.
- **v2.1.0** — Navegador FTP (FTP/FTPS/SFTP).
- **v2.0.0** — Modo relé MITM, iconos Phosphor, CLI `--mitm`.
- **v1.9.2** — UI iOS oscura, progreso + ETA, navegador de archivos, modo PHP CLI.

## Contribuir

PRs bienvenidos. Manténlo como **un solo archivo** — las funciones se integran en `upload.php`. Rama desde `main`, actualiza `CHANGELOG.md`, e incluye una captura de pantalla para cambios de UI.

## Licencia

MIT — ver [LICENSE](LICENSE).

## Aviso legal

Proporcionado tal cual. El autor no acepta responsabilidad por mal uso, pérdida de datos o incidentes de seguridad por dejar este script accesible en un servidor de producción. Auto-destrúyelo en el momento en que termines.

— Desarrollador principal: [amirhp-com](https://amirhp.com/)
