<!DOCTYPE html>
<?php
/*
 * @Author: Amirhossein Hosseinpour <https://amirhp.com>
 * @Date Created: 2020/11/15 19:31:15
 * @Last modified by: amirhp-com <its@amirhp.com>
 * @Last modified time: 2025/01/08 14:08:56
 */

@ini_set("display_errors", 1);
error_reporting(E_ERROR);
?>
<html>

<head>
  <title>Upload File from URL to WebServer v14</title>
  <style>
    * {
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
      font-weight: 300;
      font-size: 16px;
    }

    #progress {
      font-size: 2rem;
      margin: 1rem;
      font-family: Calibria;
      font-weight: 800;
    }

    form {
      margin-top: 1rem;
      display: flex;
      flex-direction: column;
      align-content: center;
      justify-content: center;
      width: 100%
    }

    form>* {
      align-self: center;
      margin-bottom: 1rem;
      min-width: 250px
    }

    form div>span {
      font-size: small;
      position: absolute;
      top: -9px;
      background: white;
      display: block;
      padding: 0 5px !important;
      text-align: left;
      left: 6px;
      text-transform: lowercase;
      font-family: arial;
      color: #0060dfbd;
    }

    input:invalid {
      background-image: linear-gradient(45deg, transparent, transparent 50%, #df0000 50%, #ff7a7a 100%) !important;
      border-color: #df0000 !important;
    }

    input[required] {
      outline: none !important;
      background-image: linear-gradient(45deg, transparent, transparent 50%, #0060df 50%, #61a5ff 100%);
      background-position: top right;
      background-size: 1rem 1rem;
      background-repeat: no-repeat
    }

    h1.aw {
      font-weight: 900;
      font-size: 3rem;
      margin: 0;
      color: #000;
    }

    span.dw {
      color: #222;
      font-size: 1.3rem;
      display: block;
      margin: 0 0 -4rem 0;
      font-weight: normal;
    }

    body.uffutw {
      text-transform: lowercase;
      font-family: Calibri;
      color: #222;
      text-align: center;
      margin-top: 5rem;
    }

    small.red-alert {
      display: block;
      width: 345px;
      margin: auto;
    }

    .red-alert,
    .red-alert a {
      text-transform: uppercase;
      font-weight: 800;
      color: #e32121;
    }
  </style>
  <link rel="icon" href="https://raw.githubusercontent.com/amirhp-com/upload-file-from-url-to-webserver/main/blackswan.png" sizes="32x32" />
  <link rel="icon" href="https://raw.githubusercontent.com/amirhp-com/upload-file-from-url-to-webserver/main/blackswan.png" sizes="192x192" />
</head>

<body class="uffutw upload-file-from-url-to-webserver v-14">
  <h1 class="aw">
    <div style="background: url('https://raw.githubusercontent.com/amirhp-com/upload-file-from-url-to-webserver/main/blackswan.png') no-repeat center/contain;padding-top: 5rem;margin-bottom: 0.5rem;"></div>
    <span class="dw">BlackSwan Upload File from URL to Web Server v.14</span><br>URL-Address to WebServer</h1>
  <?php
  if (isset($_GET["delete"]) && "true" == $_GET["delete"]) {
    unlink(__FILE__);
    die('<h3 class="red-alert" style="font-size: 1.5rem;">SELF-DESTRUCTION WAS SUCCESSFUL, BYE &#x1F44B;!</h3>');
  }
  ?>
  <small>Developed by <a href="https://amirhp.com/" target="_blank">amirhp-com</a> | Give star on <a href="https://github.com/amirhp-com/upload-file-from-url-to-webserver" target="_blank">Github</a> | your_ip: <?= get_real_IP_address(); ?> [ <a href="./">root</a> / <a href="?r=<?= time(); ?>">new?</a> ]</small>
  <br><br>
  <?php
  if (isset($_POST['url'], $_POST["name"])) {
    set_time_limit(24 * 60 * 60);
    $url  = $_POST["url"];
    $name = $_POST["name"];
    $folder = $_POST["folder"] ?? "";
    $folder = !empty($folder) ? rtrim(ltrim($folder, '/\\'), '/\\') : "";
    ob_implicit_flush(true);
    ob_start();
    $server = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]";
    echo "<script>
          document.title = 'Uploading ...';
          document.querySelector('h1').innerHTML += `
          <div style=\"font-size: 0;margin-top: 3rem;\"><small style=\"font-size: 1rem;\">
          Transferring <a href='$url' target='_blank'>Origin URL-Address</a> as <a href='{$server}/".(!empty($folder)?"{$folder}/":"")."{$name}' target='_blank'><strong>".(!empty($folder)?"{$folder}/":"")."{$name}</strong></a><br>
          <span style=\"margin-top: 1rem;display: block;\">Please wait until process complete or Press ESC key to cancel</span></small></div>
          <div id=\"progress\"></div>`;</script>";
    $time = microtime(true);
    $remote = fopen($url, 'r');
    if (empty($folder)) { $folder = __DIR__; }
    if (!is_dir($folder)) mkdir($folder, 0777, true);
    $path_full = $folder . "/" . $name;
    if (file_exists($path_full)) @unlink($path_full);
    $local = fopen($path_full, 'w');
    stream_context_set_default(array('http' => array('method' => 'HEAD')));
    $headers = get_headers($url, true);

    if (!$headers) {
      echo "Force uploading fot NON-SSL Servers/Direct Admin hosts ...";
      ob_end_flush();
      ob_flush();
      flush();
      $ch = curl_init($url);
      $fp = fopen($path_full, 'wb');
      curl_setopt($ch, CURLOPT_FILE, $fp);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_exec($ch);
      curl_close($ch);
      fclose($fp);
      echo "<pre style='text-align: left; direction: ltr; border:1px solid gray; padding: 1rem; overflow: auto;'>" . print_r($fp, 1) . "</pre>";
      die("<br>Upload complete!");
    }

    $headers = array_change_key_case(get_headers($url, 1));
    $filesize = $headers['content-length'];
    ob_end_flush(); ob_flush(); flush(); ob_start();
    if ($filesize < 1) {
      echo "<pre style='text-align: left; direction: ltr; border:1px solid #1e45cf; padding: 1rem; color: #1e45cf;'>" . print_r($headers, 1) . "</pre>";
      echo "<pre style='text-align: left; direction: ltr; border:1px solid #c34f1e; padding: 1rem; color: #c34f1e;'>" . print_r($_SERVER, 1) . "</pre>";
      exit;
    }
    $read_bytes = 0; $num = 0; $progress = 1;
    $steps = floor($filesize / 2048) / 300 < 0 ? 3 : floor($filesize / 2048) / 300;
    echo "<script>
      document.title = 'Uploading " . sprintf("%'05.2f%%", $progress) . "';
      document.querySelector('#progress').innerHTML = '( " . sprintf("%'05.2f%%", $progress) . " — " . human_filesize($filesize) . " )<br><small style=\"text-transform: capitalize;\">Elapsed Time: " . human_timing($time) . "</small>';
      document.querySelector('body').style.backgroundImage = 'linear-gradient(to right, rgba(0, 223, 56, 0.18) $progress%, white $progress%)';
    </script>";
    while (!feof($remote)) {
      $buffer = fread($remote, 2048);
      fwrite($local, $buffer);
      $read_bytes += 2048;
      $num++;
      if ($num > 4 && $steps > 1) {
        if ($num % $steps == 0) {
          $progress = min(100, 100 * $read_bytes / $filesize);
          echo "<script>
            document.title = 'Uploading " . sprintf("%'05.2f%%", $progress) . "';
            document.querySelector('#progress').innerHTML = '( " . sprintf("%'05.2f%%", $progress) . " — " . human_filesize($read_bytes) . " / " . human_filesize($filesize) . " )<br><small style=\"text-transform: capitalize;\">Elapsed Time: " . human_timing($time) . "</small>';
            document.querySelector('body').style.backgroundImage = 'linear-gradient(to right, rgba(0, 223, 56, 0.18) $progress%, white $progress%)';
          </script>";
        }
      }
      ob_end_flush(); ob_flush(); flush(); ob_start();
    }
    fclose($remote);
    fclose($local);

    $should_extract = "https://wordpress.org/latest.zip" == $url;

    echo "<script>
      document.title = 'Transferring Done!';
      document.querySelector('#progress').innerHTML = '( 100.00% — " . human_filesize($filesize) . " / " . human_filesize($filesize) . " )';
      document.querySelector('body').style.backgroundImage = 'linear-gradient(to right, rgba(0, 223, 56, 0.18) $progress%, white $progress%)';
      document.querySelector('h1').innerHTML += '<div style=\"margin-bottom: 0.5rem;\"><small style=\"font-size: 1rem;\">✅ Transferring done successfully in ".human_timing($time).($should_extract ? ", wait ..." : ".")."</small></div>';
    </script>";
    ob_end_flush(); ob_flush(); flush();

    if ($should_extract) {

      echo "<script>document.querySelector('h1').innerHTML += '<div style=\"margin-bottom: 0.5rem;\"><small style=\"font-size: 1rem;\">⏳ PLEASE WAIT, Extracting Wordpress ZIP archive ...</small></div>';</script>";
      ob_end_flush(); ob_flush(); flush(); ob_start();

      $rootDir = __DIR__;
      $zipFile = $path_full;
      $tempDir = $rootDir . '/temp/wordpress';
      $continue = false;
      $zip = new ZipArchive;
      if ($zip->open($zipFile) === TRUE) {
        $zip->extractTo($rootDir . '/temp');
        $zip->close();
        $continue = true;
        echo "<script>document.querySelector('h1').innerHTML += '<div style=\"margin-bottom: 0.5rem;\"><small style=\"font-size: 1rem;\">✅ WordPress ZIP file extracted successfully.</small></div>';</script>";
        echo "<script>document.querySelector('h1').innerHTML += '<div style=\"margin-bottom: 0.5rem;\"><small style=\"font-size: 1rem;\">⏳ PLEASE WAIT, Moving wordpress files & folders to root ...</small></div>';</script>";
        ob_end_flush(); ob_flush(); flush(); ob_start();
      } else {
        echo "<script>document.querySelector('h1').innerHTML += '<div style=\"margin-bottom: 0.5rem;\"><small style=\"font-size: 1rem;\">⛔️ Error: Failed to extract ZIP file ({$local}).</small></div>';</script>";
        ob_end_flush(); ob_flush(); flush(); ob_start();
      }
      if ($continue) {

        if (!is_dir($tempDir)) {
          echo "<script>document.querySelector('h1').innerHTML += '<div style=\"margin-bottom: 0.5rem;\"><small style=\"font-size: 1rem;\">⛔️ Error: 'wordpress' folder not found in the ZIP file.</small></div>';</script>";
          ob_end_flush(); ob_flush(); flush(); ob_start();
        }
        // Step 3: Move files from the 'wordpress' folder to the root directory
        $files = scandir($tempDir); $jf = 0; $jfl = 0;
        foreach ($files as $file) {
          if ($file !== '.' && $file !== '..') {
            $source = $tempDir . '/' . $file;
            $destination = $rootDir . '/' . $file;
            // Move the file or directory
            if (is_dir($source)) {
              $jfl++; rename($source, $destination);
            } else {
              $jf++; rename($source, $destination);
            }
          }
        }
        echo "<script>document.querySelector('h1').innerHTML += '<div style=\"margin-bottom: 0.5rem;\"><small style=\"font-size: 1rem;\">✅ <strong>".number_format($jf)."</strong> Files & <strong>".number_format($jfl)."</strong> Folders moved successfully to the root directory.</small></div>';</script>";
        ob_end_flush(); ob_flush(); flush(); ob_start();

        // Step 4: Remove the temporary folder
        $tempPath = $rootDir . '/temp';
        if (is_dir($tempPath)) {
          if (rmdir($tempPath)) {
            echo "<script>document.querySelector('h1').innerHTML += '<div style=\"margin-bottom: 0.5rem;\"><small style=\"font-size: 1rem;\">✅ Temporary 'temp' folder removed successfully.</small></div>';</script>";
            ob_end_flush(); ob_flush(); flush(); ob_start();
          } else {
            // Fallback to recursive deletion if the folder isn't empty
            rmdir_recursive($tempPath);
            echo "<script>document.querySelector('h1').innerHTML += '<div style=\"margin-bottom: 0.5rem;\"><small style=\"font-size: 1rem;\">✅ Temporary 'temp' folder removed recursively.</small></div>';</script>";
            ob_end_flush(); ob_flush(); flush(); ob_start();
          }
        }else{
          echo "<script>document.querySelector('h1').innerHTML += '<div style=\"margin-bottom: 0.5rem;\"><small style=\"font-size: 1rem;\">⛔️ Could not remove Temporary 'temp' folder.</small></div>';</script>";
          ob_end_flush(); ob_flush(); flush(); ob_start();
        }

        // Step 5: Optionally, delete the ZIP file
        if (file_exists($zipFile)) {
          @unlink($zipFile);
          @unlink($folder . "/license.txt");
          @unlink($folder . "/readme.html");
          @unlink($folder . "/xmlrpc.php");
          echo "<script>document.querySelector('h1').innerHTML += '<div style=\"margin-bottom: 0.5rem;\"><small style=\"font-size: 1rem;\">✅ Uploaded ZIP file deleted, extra WordPress files deleted.</small></div>';</script>";
          ob_end_flush(); ob_flush(); flush(); ob_start();
        }
      }

    }
    ob_end_flush();ob_flush(); flush();
    echo "<script>
      document.querySelector('h1').innerHTML += `
      <div style=\"font-size: 0;margin: 2rem; padding:1rem;\">
        <small style=\"font-size: 1rem;\">
          <a href=\"?r=" . time() . "\" style=\"background: #0060df;color: white;text-decoration: none; padding: 0.5rem 2rem;border: none;border-radius: 3px;box-shadow: 0 0 8px -3px #00000069;margin: 0 1rem;cursor: pointer;\">Upload another file</a>
          <a href=\"?delete=true\" style=\"background:#df0025;color: white;text-decoration: none; padding: 0.5rem 2rem;border: none;border-radius: 3px;box-shadow: 0 0 8px -3px #00000069;margin: 0 1rem;cursor: pointer;\">Self Destruct?</a>
        </small>
      </div>`;</script>";
    echo "all done ./";
    exit;
  }
  ?>
  <form style="margin-top: 1rem;" name='upload' method='post' action="<?php echo strtok($_SERVER['REQUEST_URI'], '?'); ?>">
    <div style='position: relative;'>
      <span>Origin URL-Address</span>
      <input type="url" id="url" onclick="this.select();" autofocus tabindex="1" required="required" name='url' style="min-width: 500px;padding: 0.5rem;border-radius: 3px;border: 1px solid #0060df;" value="https://wordpress.org/latest.zip" placeholder="set input url" />
    </div>
    <br>
    <div style='position: relative;'>
      <span>Destination Folder</span>
      <input type="text" id="folder" tabindex="2" name='folder' style="min-width: 500px;padding: 0.5rem;border-radius: 3px;border: 1px solid #0060df;" value="" placeholder="docs/etc" />
    </div>
    <br>
    <div style='position: relative;'>
      <span>Destination Filename</span>
      <input type="text" id="name" tabindex="3" required="required" name='name' style="min-width: 500px;padding: 0.5rem;border-radius: 3px;border: 1px solid #0060df;" value="wordpress_latest.zip" placeholder="set file name" />
    </div>
    <div class="form-wrapper">
      <input type="submit" value="upload" tabindex="4" style="background: #0060df;color: white;padding: 0.5rem 2rem;border: none;border-radius: 3px;box-shadow: 0 0 8px -3px #00000069;margin: 0 1rem;cursor: pointer;">
    </div>
  </form>
  <script type="text/javascript">
    setTimeout(function() { document.querySelector("#url").select(); }, 200);
    document.querySelector("#url").onchange = function() { document.querySelector("#name").value = document.querySelector("#url").value.split('/').pop(); };
    document.querySelector("#url").onkeyup = function() { document.querySelector("#name").value = document.querySelector("#url").value.split('/').pop(); };
  </script>
  <small class="red-alert">DO NOT KEEP THIS FILE ON YOUR SERVER, DELETE IT AS SOON AS YOU'RE DONE. <a href='?delete=true'>[&#x1F5D1;&#xFE0F;]</a></small>
</body>

</html>
<?php
function get_real_IP_address() {
  if (!empty($_SERVER['GEOIP_ADDR'])) {
    $ip = $_SERVER['GEOIP_ADDR'];
  } elseif (!empty($_SERVER['HTTP_X_REAL_IP'])) {
    $ip = $_SERVER['HTTP_X_REAL_IP'];
  } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}
function human_filesize($bytes = 0, $decimals = 2) {
  if (!$bytes || $bytes < 1) { return "ERR"; }
  $sz = 'BKMGTP';
  $factor = floor((strlen($bytes) - 1) / 3);
  return sprintf("%'05.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
}
function human_timing($time) {
  $s = microtime(true) - $time;
  $h = floor($s / 3600);
  $s -= $h * 3600;
  $m = floor($s / 60);
  $s -= $m * 60;
  return ($h > 0 ? "$h:" : "") . sprintf('%02d', $m) . ':' . sprintf('%02d', $s);
}
function rmdir_recursive($dir) {
  $files = array_diff(scandir($dir), ['.', '..']);
  foreach ($files as $file) {
      $path = $dir . '/' . $file;
      is_dir($path) ? rmdir_recursive($path) : unlink($path);
  }
  return rmdir($dir);
}
/*##################################################
Lead Developer: [amirhp-com](https://amirhp.com/)
##################################################*/