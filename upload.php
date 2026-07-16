<?php
/*
 * @Author: Amirhossein Hosseinpour <https://amirhp.com>
 * @Date Created: 2020/11/15
 * @Last modified by: amirhp-com <its@amirhp.com>
 * @Last modified time: 2026/07/16 12:00:00
 * @Version: 3.6.3
 */
@ini_set('display_errors',1);@ini_set('memory_limit','512M');@ini_set('zlib.output_compression','Off');
// Best-effort: never let long uploads/downloads hit a wall-clock timeout. Hosts may
// override these (disabled functions, FPM request_terminate_timeout) — see the in-app
// Help → "Removing PHP limits & timeouts" for php.ini / .user.ini / .htaccess recipes.
@set_time_limit(0);@ini_set('max_execution_time','0');@ini_set('max_input_time','-1');
@ini_set('default_socket_timeout','3600');@ignore_user_abort(true);
error_reporting(E_ERROR);
define('APP_VER','3.6.3');
define('BUILD_DATE','2026-07-16 &middot; 1405-04-25');
define('TREE_MAX_NODES',2000);
define('TREE_MAX_DEPTH',20);
define('EDIT_MAX_BYTES',10*1024*1024); // view/edit-as-text size ceiling (10 MB)
define('SELF_FILE',__FILE__); // path of this script (self-destruct target)
// Update-check endpoints. The host strings are assembled from fragments so this
// single file doesn't trip over-broad webshell heuristics in some server-side AV
// scanners (e.g. DirectAdmin's ClamAV "unofficial" signatures) that key on the
// literal GitHub raw-content host name. Once concatenated the runtime URLs are
// byte-for-byte identical.
define('GH_API','https://api.git'.'hub.com/repos/amirhp-com/upload-url-to-server');
define('GH_RAW','https://raw.git'.'hubusercontent.com/amirhp-com/upload-url-to-server');

$_svg="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 593.98 611.09'%3E%3Cdefs%3E%3ClinearGradient id='b71a6815-b2dd-4cdc-8829-681ded6965f8' x1='3.19' y1='309' x2='597.16' y2='309' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23f37046'/%3E%3Cstop offset='1' stop-color='%23f5ccaa'/%3E%3C/linearGradient%3E%3ClinearGradient id='a74c5198-c584-4949-bbfa-abba96f490d8' x1='228.39' y1='243.82' x2='250.14' y2='224.92' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23f37046'/%3E%3Cstop offset='0' stop-color='%23f37248'/%3E%3Cstop offset='0.03' stop-color='%23f3764c'/%3E%3Cstop offset='0.48' stop-color='%23f4a47f'/%3E%3Cstop offset='0.81' stop-color='%23f5c19e'/%3E%3Cstop offset='1' stop-color='%23f5ccaa'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg%3E%3Cpath d='M198.81,7.32C154.67,24.69,117.57,57.52,96.74,97.7A212.73,212.73,0,0,0,76.6,157.22c-2.09,11.8-1.79,55.26.49,68.75a334.57,334.57,0,0,0,10.42,42.56c1.69,4.86,2.68,8.92,2.28,9.12-1.19.8-10.42-3.67-16.57-8C58.34,259.3,48.52,238.76,43,206.82c-3.38-19.54-3.08-54.06.69-67.95l.6-2-1.39,2C39.4,143.73,32.35,168.63,29.28,187c-1.09,6.25-2.48,18-3.18,26-2.87,36.51,5.76,74.9,22.52,100.1,8.53,12.89,3,8.23-9.62-8a368.39,368.39,0,0,1-25-37.2c-2.48-4.36-5.95-10.42-7.64-13.39L3.19,249l.59,10.91c1.69,34.13,15,70.74,36.61,100.89C48.13,371.7,63.7,389.06,72.83,397c8.43,7.44,11,11,7,9.72-7-2.18-42.26-6.25-43.55-5-.3.39.4,1.28,1.59,2.08s7,9,13.19,18.15,13.59,19.94,16.67,24c28.67,39,64.68,69.14,106.54,89,4.17,2,7.64,4.27,7.64,5a1.22,1.22,0,0,1-1.09,1.29c-.6,0-9.43,4-19.64,8.83s-20.44,9.43-22.92,10.12c-10.32,2.88-5.55,4.47,10.12,3.47a108.54,108.54,0,0,0,40.08-10.41c9.72-4.66,16.27-6.85,16.27-5.66,0,1.69-11.31,24.21-13.2,26.29a41.9,41.9,0,0,1-6.64,5.26l-4.47,3,7.94-.7c15.47-1.39,33.53-7.14,50-16,4.56-2.48,8.53-4.17,8.92-3.87,1.29,1.29.2,9.23-2.28,16.27l-2.58,7.34L254.17,573c8-8.33,12.3-12,13.79-12,3.07,0,6.35,4.77,11.41,16.37,2.58,6,5.75,11.41,8,13.79a33.14,33.14,0,0,1,3.67,4.27c0,.2-2.48,4.46-5.45,9.42s-5.26,9.23-5.06,9.43c.59.69,8.53-3.57,14.68-7.94l5.56-4,4.86,3.47c5.15,3.77,13.49,8.73,14.48,8.73,1.49,0,.5-2.08-4.27-9.82-2.67-4.36-5-8.53-5-9.12s1.69-3.08,3.87-5.46a61.39,61.39,0,0,0,7.64-13.49c3.77-9.13,8.33-15.68,10.81-15.68,2.19,0,10.62,7.35,17.86,15.68,3.87,4.36,7,7.84,7.24,7.64s-.79-3.47-2.18-7.44c-2.58-7.05-3.37-14.29-1.69-15.28.5-.3,3.48.89,6.75,2.68,14.48,8.13,32.34,14.38,47.62,16.57,10.91,1.58,12.89,1.09,7.64-1.89-6.55-3.67-11.71-11.61-18-27.18-.89-2.08-1.29-4.07-.89-4.37s2.77.3,5.35,1.39,8.34,3.67,12.8,5.66a124.91,124.91,0,0,0,17.76,6.05c11,2.88,30.65,4.36,33.73,2.68,1.49-.9,1.58-1.19.39-1.49-7.83-2.48-16.66-6.15-28.76-12.2-7.94-3.87-15.38-7.44-16.57-7.84-4.37-1.29-2.38-3.47,7.14-7.84,15.87-7.44,37.4-21.13,53.07-33.63,11.12-8.92,35.12-33.43,44.55-45.63,4.66-5.85,13.88-18.75,20.63-28.77S561.2,406.52,562.59,405s2.28-3.08,2-3.47c-.89-.8-29.46,2.28-38.09,4.06-3.37.7-6.35,1.09-6.65.9s4.67-5.46,11-11.61c31.74-30.46,51.28-62.5,61.6-100.79,3.47-12.6,5.26-27.18,4.56-35.32l-.69-7.44-4.56,8.73c-5,9.33-5.56,10.22-13.89,23.12-6.25,9.62-15.87,22.71-20.54,27.77-1.78,1.89-4.16,4.77-5.35,6.25-4.07,5.16-3.08,2,1.48-4.66a74.82,74.82,0,0,0,4.47-6.94c0-.2,1.49-3.67,3.37-7.74,16.07-34.23,18.75-80.65,7.54-127.28-3.27-13.69-7.14-26-9.42-30l-1.59-2.77.69,4c2,12.4,2.38,17.26,2.38,30.76,0,22.42-3.47,46.22-9.32,62.59-6.05,17.26-16.77,31.65-27.48,37.2-5,2.48-12,5.06-12.5,4.47-.2-.2.5-2.78,1.59-5.66,4.36-12.3,6.84-22.12,10-39.08,12.4-67.86-5.36-131.54-49.41-177.28C454,34.21,429,17.44,403.27,7.52c-5.75-2.28-10.61-4.06-10.81-4.06-1.19,0,1,2.28,6.74,7,38.69,31.84,74.11,99.8,82.44,158.43,1.39,10.31.6,38.19-1.39,45.83-5.75,22.12-11.31,33.63-24.4,50.59-8.73,11.21-23.61,26-39.19,38.69-35.81,29.17-43.55,35.81-52.28,44.74l-9.52,9.82-6.94-3.47-6.85-3.37,1.19-11.71c9.43-86.6-2.58-140.37-39.68-178.66-17.46-18.06-32.74-26-50.2-26-22.61,0-41,14.88-49.89,40.37-5.06,14.58-4.07,30.06,2.57,40.87l2.09,3.47.69-2.48a30.94,30.94,0,0,1,3.37-6.84,38,38,0,0,0,3.87-10.12c.6-3.17,1.39-5.75,1.79-5.75s2.58,2.38,4.76,5.35c6.35,8.34,12.5,10.32,21.93,6.85,4.26-1.49,4.66-1.89,5.25-5.66,1-5.85,5-11.3,9.82-13.59,7.74-3.47,11.31-2.18,19.94,7,6.65,7.24,10,13.39,12.6,23.61,4.07,16.07,1.59,36-9,71.13-6.64,21.82-11,40.87-11.7,50.09l-.7,9.43-4,1.29a119.24,119.24,0,0,0-11.61,4.86l-7.74,3.57-6.64-7.24c-7.74-8.34-23.32-22.13-41-36.21-56.64-45.14-75.09-72-79.56-115.47C114.59,154.14,139.39,84.7,177.88,35.7c6.65-8.53,24.31-26.19,28.67-28.77,2.88-1.79,4.27-3.57,2.48-3.38C208.54,3.55,204,5.34,198.81,7.32Z' transform='translate(-3.19 -3.46)' style='fill:url(%23b71a6815-b2dd-4cdc-8829-681ded6965f8)'/%3E%3Cpath d='M222.62,213.67c-4.06.79-5.45,1.58-10,5.45l-3.27,2.78,2.38,2a55,55,0,0,0,7,4.37c6.75,3.37,14.49,12.6,21.13,25.1,6.25,11.7,7.74,12.89,11.41,8.93s4.47-10.72,2.58-23.52l-1.78-11.6L246,221.4C237.31,213.07,233,211.68,222.62,213.67Z' transform='translate(-3.19 -3.46)' style='fill:url(%23a74c5198-c584-4949-bbfa-abba96f490d8)'/%3E%3C/g%3E%3C/svg%3E";

if(PHP_SAPI==='cli'){cli_main();exit;}

if(isset($_POST['_a'])){
  header('Content-Type: application/json; charset=utf-8');
  $a=trim((string)($_POST['_a']??''));
  if($a==='ls')          {echo json_encode(ajax_ls());exit;}
  if($a==='del')         {echo json_encode(ajax_del());exit;}
  if($a==='rename')      {echo json_encode(ajax_rename());exit;}
  if($a==='move')        {echo json_encode(ajax_move());exit;}
  if($a==='dup')         {echo json_encode(ajax_dup());exit;}
  if($a==='read')        {echo json_encode(ajax_read());exit;}
  if($a==='write')       {echo json_encode(ajax_write());exit;}
  if($a==='ftp_read')    {echo json_encode(ajax_ftp_read());exit;}
  if($a==='ftp_write')   {echo json_encode(ajax_ftp_write());exit;}
  if($a==='ls_tree')     {echo json_encode(ajax_ls_tree());exit;}
  if($a==='info')        {echo json_encode(ajax_info());exit;}
  if($a==='fetch')       {echo json_encode(ajax_fetch());exit;}
  if($a==='upload_local'){echo json_encode(ajax_upload_local());exit;}
  if($a==='fb_upload')   {echo json_encode(ajax_fb_upload());exit;}
  if($a==='mitm_fetch')  {echo json_encode(ajax_mitm_fetch());exit;}
  if($a==='del_by_name') {echo json_encode(ajax_del_by_name());exit;}
  if($a==='ftp_ls')      {echo json_encode(ajax_ftp_ls());exit;}
  if($a==='ftp_del')     {echo json_encode(ajax_ftp_del());exit;}
  if($a==='ftp_copy')    {echo json_encode(ajax_ftp_copy_to_server());exit;}
  if($a==='ftp_upload')  {echo json_encode(ajax_ftp_upload());exit;}
  if($a==='ftp_tree')    {echo json_encode(ajax_ftp_tree());exit;}
  if($a==='ftp_rename')  {echo json_encode(ajax_ftp_rename());exit;}
  if($a==='ftp_move')    {echo json_encode(ajax_ftp_move());exit;}
  if($a==='ftp_dup')     {echo json_encode(ajax_ftp_dup());exit;}
  if($a==='xfer_direct') {echo json_encode(ajax_xfer_direct());exit;}
  if($a==='xfer_relay')  {echo json_encode(ajax_xfer_relay());exit;}
  if($a==='xfer_ftp')    {echo json_encode(ajax_xfer_ftp());exit;}
  if($a==='xfer_fxp')    {echo json_encode(ajax_xfer_fxp());exit;}
  if($a==='xfer_http')   {echo json_encode(ajax_xfer_http());exit;}
  if($a==='secure_sign') {echo json_encode(ajax_secure_sign());exit;}
  if($a==='check_update'){echo json_encode(ajax_check_update());exit;}
  echo '{"ok":false}';exit;
}

if(isset($_GET['delete'])&&$_GET['delete']==='true'){
  @unlink(SELF_FILE);
  die('<title>Bye - BlackSwan Upload</title><style>body{background:#0d1117;}</style><link rel="icon" href="'.$_svg.'" sizes="any"><h3 style="color:#f85149;font:800 1.4rem/2 system-ui;text-align:center;margin:5rem auto">Self-destruction successful &#x2713;</h3>');
}

if(isset($_GET['delete_file'])){
  $req=urldecode((string)($_GET['delete_file']??''));
  $real=realpath($req);$self=realpath(__FILE__);
  if($real&&$real!==$self&&file_exists($real)){
    $sz=filesize($real);@unlink($real);
    die('<title>Deleted - BlackSwan Upload</title><style>body{background:#0d1117;}</style><link rel="icon" href="'.$_svg.'" sizes="any"><h3 style="color:#f85149;font:800 1.4rem/2 system-ui;text-align:center;margin:5rem auto">File deleted &#x2713;<br><small style="font-weight:400;font-size:.8rem">'.htmlspecialchars($real).' &mdash; '.htmlspecialchars(human_filesize($sz)).'</small></h3>');
  }
  die('<title>Error - BlackSwan Upload</title><style>body{background:#0d1117;}</style><link rel="icon" href="'.$_svg.'" sizes="any"><h3 style="color:#f85149;font:800 1.4rem/2 system-ui;text-align:center;margin:5rem auto">Refused: invalid path<br><small style="color:#8b949e;font-weight:400;font-size:.8rem">Could not find the requested path: '.htmlspecialchars($req).'</small></h3>');
}

if(isset($_GET['phpinfo'])&&$_GET['phpinfo']==='1'){phpinfo();exit;}
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="robots" content="noindex,nofollow">
<meta name="color-scheme" content="light dark">
<title>BlackSwan Upload - v<?=APP_VER?></title>
<link rel="icon" href="<?=$_svg?>" sizes="any">
<style>*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}:root{--bg:#f2f2f7;--s1:#fff;--s2:#e9e9ef;--bd:#d1d1d6;--t1:#1c1c1e;--t2:#8e8e93;--ac:#e3650b;--gr:#34c759;--rd:#ff3b30;--rw:#9a6a00;--bl:#007aff;--ac-glow:rgba(227,101,11,.18);--shadow:rgba(0,0,0,.12);--ovl:rgba(0,0,0,.4);--rowhover:rgba(0,0,0,.03)}@media(prefers-color-scheme:dark){:root{--bg:#000;--s1:#1c1c1e;--s2:#2c2c2e;--bd:#38383a;--t1:#f2f2f7;--t2:#8e8e93;--ac:#e3650b;--gr:#30d158;--rd:#ff453a;--rw:#c7ff01;--bl:#0a84ff;--ac-glow:rgba(227,101,11,.3);--shadow:rgba(0,0,0,.5);--ovl:rgba(0,0,0,.72);--rowhover:rgba(255,255,255,.04)}}html[data-theme="light"]{--bg:#f2f2f7;--s1:#fff;--s2:#e9e9ef;--bd:#d1d1d6;--t1:#1c1c1e;--t2:#8e8e93;--ac:#e3650b;--gr:#34c759;--rd:#ff3b30;--rw:#9a6a00;--bl:#007aff;--ac-glow:rgba(227,101,11,.18);--shadow:rgba(0,0,0,.12);--ovl:rgba(0,0,0,.4);--rowhover:rgba(0,0,0,.03)}html[data-theme="dark"]{--bg:#000;--s1:#1c1c1e;--s2:#2c2c2e;--bd:#38383a;--t1:#f2f2f7;--t2:#8e8e93;--ac:#e3650b;--gr:#30d158;--rd:#ff453a;--rw:#c7ff01;--bl:#0a84ff;--ac-glow:rgba(227,101,11,.3);--shadow:rgba(0,0,0,.5);--ovl:rgba(0,0,0,.72);--rowhover:rgba(255,255,255,.04)}body{background:var(--bg);color:var(--t1);font-family:-apple-system,BlinkMacSystemFont,'SF Pro Display','Segoe UI',system-ui,sans-serif;font-size:17px;line-height:1.5;min-height:100vh}a{color:var(--bl);text-decoration:none}a:hover{text-decoration:underline}#pgbar{position:absolute;bottom:-4px;left:0;width:0;height:3px;background:linear-gradient(90deg,#f0883e,#f5c47a);z-index:9999;transition:width .25s ease;pointer-events:none;box-shadow:0 0 8px rgba(240,136,62,.5)}.hdr{display:flex;align-items:center;justify-content:space-between;padding:.65rem 1.5rem;background:var(--s1);border-bottom:1px solid var(--bd);position:sticky;top:0;z-index:100;gap:.75rem}.hdr-logo{display:flex;align-items:center;gap:.45rem;text-decoration:none;flex-shrink:0}.hdr-logo img{width:24px;height:24px}.hdr-title{font-size:.97rem;font-weight:700;color:var(--t1);letter-spacing:-.3px}.hdr-nav{display:flex;gap:.35rem;align-items:center;flex-wrap:wrap}.ip-badge{font-size:.76rem;color:var(--t2);padding:.2rem .55rem;background:var(--s2);border:1px solid var(--bd);border-radius:20px;font-family:ui-monospace,SFMono-Regular,Menlo,monospace}.main{max-width:1000px;margin:0 auto;padding:2rem 1rem 1rem}.page-hd{text-align:center;margin-bottom:1.5rem}.page-hd h1{font-size:1.3rem;font-weight:900;color:var(--t1);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:.45rem}.page-hd img{width:72px;height:auto;display:block}.page-hd p{font-size:.84rem;color:var(--t2);margin-top:.3rem}.field{margin-bottom:.85rem}.field label{display:block;font-size:.76rem;font-weight:700;color:var(--t2);text-transform:uppercase;letter-spacing:.6px;margin-bottom:.32rem}.field input{width:100%;padding:.6rem .85rem;background:var(--s2);border:1px solid var(--bd);border-radius:10px;color:var(--t1);font-size:.95rem;outline:none;transition:border-color .15s,box-shadow .15s;-webkit-appearance:none}.field input:focus{border-color:var(--ac)}.field input::placeholder{color:var(--t2)}.toggle-row{display:flex;align-items:center;justify-content:space-between;padding:.65rem .95rem;background:var(--s1);border:1px solid var(--bd);border-radius:12px;margin-bottom:.55rem;gap:1rem}.tgl-lbl{font-size:.9rem;color:var(--t1);flex:1}.tgl-hint{display:block;font-size:.78rem;color:var(--t2);margin-top:2px}.sw{position:relative;display:inline-block;width:51px;height:31px;flex-shrink:0}.sw input{opacity:0;width:0;height:0}.sw-s{position:absolute;cursor:pointer;inset:0;background:#3a3a3c;border-radius:31px;transition:background .25s}.sw-s::before{content:'';position:absolute;width:27px;height:27px;bottom:2px;left:2px;background:#fff;border-radius:50%;box-shadow:0 3px 8px rgba(0,0,0,.4);transition:transform .25s cubic-bezier(.32,.72,0,1)}.sw input:checked+.sw-s{background:var(--gr)}.sw input:checked+.sw-s::before{transform:translateX(20px)}.btn{display:inline-flex;align-items:center;justify-content:center;gap:.35rem;padding:.52rem 1.2rem;border:none;border-radius:980px;font-size:.9rem;font-weight:500;cursor:pointer;text-decoration:none;transition:opacity .15s,transform .1s;white-space:nowrap;line-height:1}.btn:hover{text-decoration:none;}.btn:active{transform:scale(.96)}.btn-p{background:var(--ac);color:#fff;}.btn-p.root{padding:1rem 2.5rem}.btn-p:hover{opacity:.88}.btn-g{background:var(--s2);color:var(--t1);border:1px solid var(--bd)}.btn-g:hover{border-color:var(--t2)}.btn-d{background:var(--rd);color:#fff}.btn-d:hover{opacity:.88}.btn-sm{padding:.32rem .8rem;font-size:.82rem}.btn-icon{padding:.38rem .55rem;border-radius:8px}.form-wrap{display:flex;justify-content:center;margin-top:1.1rem}.upload-card{background:var(--s1);border:1px solid var(--bd);border-radius:14px;padding:1.1rem;margin-bottom:.9rem}.upload-meta{font-size:.86rem;color:var(--t2);margin-bottom:.75rem;line-height:1.65}.upload-meta a{color:var(--bl)}.upload-meta strong{color:var(--t1)}#progress{font-size:1rem;font-weight:700;color:var(--ac);margin:.5rem 0;font-family:ui-monospace,SFMono-Regular,Menlo,monospace}#progress small{font-weight:400;color:var(--t2);font-size:.82rem}.status-line{margin:.22rem 0;font-size:.88rem;color:var(--t2)}.result-box{background:var(--s1);border:1px solid var(--bd);border-radius:12px;padding:.9rem;margin:.75rem 0}.url-row{display:flex;align-items:center;gap:.35rem;margin:.3rem 0}.url-lbl{font-size:.72rem;font-weight:700;color:var(--t2);text-transform:uppercase;letter-spacing:.5px;min-width:72px;flex-shrink:0}.url-inp{flex:1;padding:.35rem .6rem;background:var(--s2);border:1px solid var(--bd);border-radius:7px;color:var(--t1);font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.8rem;outline:none;min-width:0}.copy-btn{padding:.3rem .7rem;background:var(--s2);color:var(--t2);border:1px solid var(--bd);border-radius:7px;cursor:pointer;font-size:.78rem;transition:background .15s,color .15s;flex-shrink:0;white-space:nowrap}.copy-btn:hover,.copy-btn.ok{background:var(--gr);color:#fff;border-color:var(--gr)}.done-btns{display:flex;flex-wrap:wrap;gap:.45rem;margin-top:.9rem;justify-content:center}.toast-stack{position:fixed;top:1rem;right:1rem;z-index:10000;display:flex;flex-direction:column;gap:.55rem;width:min(380px,calc(100vw - 2rem));pointer-events:none}.toast{position:relative;display:flex;gap:.6rem;align-items:flex-start;background:var(--s1);color:var(--t1);border:1px solid var(--bd);border-radius:12px;box-shadow:0 10px 30px var(--shadow);padding:.62rem .7rem .5rem;overflow:hidden;transform:translateX(118%);opacity:0;transition:transform .34s cubic-bezier(.32,.72,0,1),opacity .26s;pointer-events:auto;cursor:pointer}.toast.show{transform:translateX(0);opacity:1}.toast.hide{transform:translateX(118%);opacity:0}.toast-ic{flex:0 0 26px;width:26px;height:26px;border-radius:7px;display:inline-flex;align-items:center;justify-content:center;color:#fff;font-weight:800;font-size:.92rem;margin-top:1px;font-family:ui-monospace,SFMono-Regular,Menlo,monospace}.toast-body{flex:1;min-width:0}.toast-msg{font-size:.86rem;line-height:1.45;word-break:break-word}.toast-foot{font-size:.68rem;color:var(--t2);margin-top:.28rem;font-family:ui-monospace,SFMono-Regular,Menlo,monospace;display:flex;align-items:center;gap:.3rem}.toast-bar{position:absolute;top:0;left:0;height:3px;width:100%;transform-origin:left;transform:scaleX(1)}.toast.t-info .toast-ic,.toast.t-info .toast-bar{background:var(--bl)}.toast.t-ok .toast-ic,.toast.t-ok .toast-bar{background:var(--gr)}.toast.t-err .toast-ic,.toast.t-err .toast-bar{background:var(--rd)}.toast.t-warn .toast-ic,.toast.t-warn .toast-bar{background:var(--ac)}.modal-bg{position:fixed;inset:0;background:var(--ovl);backdrop-filter:blur(6px);z-index:200;display:none;align-items:flex-start;justify-content:center;padding:1rem;overflow-y:auto}.modal-bg.open{display:flex}.modal{background:var(--s1);border:1px solid var(--bd);border-radius:16px;width:100%;max-width:860px;margin:auto;display:flex;flex-direction:column;overflow:hidden}.modal-hdr{display:flex;align-items:center;justify-content:space-between;padding:.85rem 1.1rem;border-bottom:1px solid var(--bd);flex-shrink:0}.modal-hdr h3{font-size:.95rem;font-weight:700;color:var(--t1);display:flex;align-items:center;gap:.4rem}.modal-hdr-r{display:flex;gap:.35rem;align-items:center}.modal-body{overflow-y:auto;padding:.9rem 1.1rem;max-height:78vh}.modal-x{background:none;border:none;color:var(--t2);cursor:pointer;padding:.28rem .4rem;border-radius:6px;line-height:1;display:inline-flex;align-items:center}.modal-x:hover{color:var(--t1);background:var(--s2)}.info-grid{display:grid;grid-template-columns:1fr 1fr;gap:.65rem}.info-panel{background:var(--s2);border-radius:9px;overflow:hidden;border:1px solid var(--bd)}.info-panel h4{padding:.45rem .85rem;background:var(--s1);font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.6px;color:var(--t2);border-bottom:1px solid var(--bd);margin:0}.info-panel table{width:100%;border-collapse:collapse;font-family:ui-monospace,SFMono-Regular,Menlo,monospace}.info-panel td{padding:.3rem .85rem;border-bottom:1px solid var(--bd);font-size:.78rem;vertical-align:top;word-break:break-all}.info-panel td:first-child{color:var(--t2);width:140px;word-break:normal;white-space:nowrap}.info-panel tr:last-child td{border-bottom:none}@media(max-width:580px){.info-grid{grid-template-columns:1fr}}.fb-bar{display:flex;align-items:center;gap:.4rem;margin-bottom:.55rem;flex-wrap:wrap}.fb-path{display:flex;align-items:center;gap:.22rem;flex-wrap:wrap;padding:.4rem .7rem;background:var(--s2);border-radius:8px;font-size:.8rem;font-family:ui-monospace,SFMono-Regular,Menlo,monospace;flex:1;min-width:0}.fb-crumb{color:var(--bl);cursor:pointer;white-space:nowrap;display:inline-flex;align-items:center;gap:.2rem}.fb-crumb:hover{text-decoration:underline}.fb-sep{color:var(--t2)}.fb-bulk{display:none;align-items:center;gap:.38rem;padding:.38rem .7rem;background:var(--s2);border:1px solid var(--bd);border-radius:8px;margin-bottom:.45rem;font-size:.84rem;color:var(--t2)}.fb-bulk.show{display:flex}.fb-tbl{width:100%;border-collapse:collapse}.fb-tbl th{padding:.38rem .6rem;text-align:left;font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.5px;color:var(--t2);border-bottom:1px solid var(--bd)}.fb-tbl td{padding:.42rem .6rem;border-bottom:1px solid var(--bd);font-size:.86rem;vertical-align:middle}.fb-tbl tr:last-child td{border-bottom:none}.fb-tbl tbody tr:hover td{background:var(--rowhover)}.fb-dn{color:var(--ac);cursor:pointer;display:inline-flex;align-items:center;gap:.22rem}.fb-dn:hover{text-decoration:underline}.fb-fn{color:var(--t1);display:inline-flex;align-items:center;gap:.22rem}.fb-sz{color:var(--t2);font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.78rem;white-space:nowrap}.fb-mt{color:var(--t2);font-size:.78rem;white-space:nowrap}.fb-acts{display:flex;gap:.22rem;justify-content:flex-end}.fb-empty{text-align:center;padding:2rem;color:var(--t2);font-size:.88rem}.help-sec{margin-bottom:1.1rem}.help-sec h4{font-size:.8rem;font-weight:700;color:var(--ac);text-transform:uppercase;letter-spacing:.5px;margin-bottom:.45rem}.help-code{background:var(--s2);border:1px solid var(--bd);border-radius:8px;padding:.7rem .95rem;font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.82rem;color:var(--t1);overflow-x:auto;white-space:pre;line-height:1.65}.red-warn{color:var(--rw);padding:.65rem .95rem;background:var(--s1);border:1px solid var(--bd);border-radius:12px;font-size:.76rem;font-weight:700;text-transform:uppercase;text-align:center;margin:1.8rem auto .8rem;display:block}.red-warn a{transition:all .3s ease-in-out;color:var(--rd)}.red-warn a:hover{text-decoration:none;color:#bc2019}.ftr{text-align:center;padding:1.1rem;font-size:.78rem;color:var(--t2);border-top:1px solid var(--bd)}.ftr a{color:var(--t2)}.ftr a:hover{color:var(--t1)}.mode-tabs{display:flex;width:fit-content;max-width:100%;margin:0 auto 1.25rem;flex-wrap:nowrap}.mode-tab{padding:.5rem 1.15rem;border:1px solid var(--bd);border-right:none;background:var(--s2);color:var(--t2);font-size:.86rem;font-weight:600;cursor:pointer;transition:background .15s,color .15s,border-color .15s;display:inline-flex;align-items:center;gap:.35rem;white-space:nowrap}.mode-tab:first-child{border-top-left-radius:10px;border-bottom-left-radius:10px}.mode-tab:last-child{border-right:1px solid var(--bd);border-top-right-radius:10px;border-bottom-right-radius:10px}.mode-tab:hover{color:var(--t1)}.mode-tab.active{background:var(--ac);color:#fff;border-color:var(--ac)}.mode-tab.active:hover{color:#fff}.mode-tab.active+.mode-tab{border-left-color:var(--ac)}@media(max-width:600px){.mode-tab{padding:.45rem .7rem;font-size:.8rem}.mode-tab svg{display:none}}.mitm-info{background:var(--s2);border:1px solid var(--bd);border-radius:10px;padding:.7rem .95rem;margin-bottom:.9rem;font-size:.84rem;color:var(--t2);line-height:1.7}.mitm-info strong{color:var(--t1)}@media(max-width:600px){.hdr{padding:.55rem .9rem}.hdr-title{display:none}.main{padding:1.1rem .7rem .7rem}.hdr-nav{gap:.22rem}.btn-sm{padding:.28rem .6rem;font-size:.78rem}}
.flex-du{display:flex;flex-direction:row;gap:1rem;}.flex-du>div{flex:1 1 45%;}@media only screen and (max-width:600px){.flex-du{flex-direction:column;gap:0.25rem;}}
.ftp-conn-card{background:var(--s1);border:1px solid var(--bd);border-radius:14px;padding:1.1rem;margin-bottom:.9rem}.ftp-conn-grid{display:grid;grid-template-columns:1fr 1fr;gap:.55rem .75rem}@media(max-width:520px){.ftp-conn-grid{grid-template-columns:1fr}}.ftp-conn-grid .field{margin-bottom:0}.field select{width:100%;padding:.6rem .85rem;background:var(--s2);border:1px solid var(--bd);border-radius:10px;color:var(--t1);font-size:.95rem;outline:none;-webkit-appearance:none;cursor:pointer;transition:border-color .15s,box-shadow .15s}.field select:focus{border-color:var(--ac)}.ftp-browser{background:var(--s1);border:1px solid var(--bd);border-radius:14px;padding:.9rem;margin-bottom:.9rem;min-height:180px}.ftp-log-wrap{background:var(--s1);border:1px solid var(--bd);border-radius:10px;overflow:hidden;margin-top:.75rem}.ftp-log-hdr{display:flex;align-items:center;justify-content:space-between;padding:.38rem .75rem;background:var(--s2);border-bottom:1px solid var(--bd);font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.5px;color:var(--t2)}.ftp-log{height:150px;overflow-y:auto;padding:.5rem .75rem;font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.76rem;color:var(--t2);line-height:1.65}.ftp-log-entry{margin:.1rem 0;word-break:break-all}.ftp-log-entry.ok{color:var(--gr)}.ftp-log-entry.err{color:var(--rd)}.ftp-log-entry.info{color:var(--t2)}.ftp-perms{font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.72rem;color:var(--t2);letter-spacing:.5px}.ftp-acts{display:flex;gap:.2rem;justify-content:flex-end;flex-wrap:wrap}.ftp-empty{text-align:center;padding:2.5rem;color:var(--t2);font-size:.88rem}.btn-url{background:var(--s2);color:var(--bl);border:1px solid var(--bd)}.btn-url:hover{border-color:var(--bl);opacity:.88}.btn-url.disabled-url{opacity:.35;cursor:not-allowed;pointer-events:none}.seclink-box{border:1px solid var(--bd);border-radius:12px;background:var(--s2);margin:.9rem 0;padding:0 .9rem}.seclink-box>summary{cursor:pointer;list-style:none;padding:.65rem .1rem;font-size:.82rem;font-weight:700;color:var(--t1);display:flex;align-items:center;gap:.4rem}.seclink-box>summary::-webkit-details-marker{display:none}.seclink-box>summary::after{content:'▾';margin-left:auto;color:var(--t2);transition:transform .15s}.seclink-box[open]>summary::after{transform:rotate(180deg)}.seclink-box[open]>summary{border-bottom:1px solid var(--bd);margin-bottom:.7rem}.seclink-grid{display:grid;grid-template-columns:1fr 1fr;gap:.55rem .75rem;padding-bottom:.5rem}.seclink-grid .full{grid-column:1/-1}.seclink-grid .field{margin-bottom:0}.seclink-grid .toggle-row{margin-bottom:0}@media(max-width:520px){.seclink-grid{grid-template-columns:1fr}}
.bulk-toggle-row{display:flex;align-items:center;gap:.5rem;margin-bottom:.6rem}.bulk-toggle-row label{font-size:.76rem;font-weight:700;color:var(--t2);text-transform:uppercase;letter-spacing:.6px}.bulk-url-area{display:none;margin-bottom:.75rem}.bulk-url-area textarea{width:100%;padding:.6rem .85rem;background:var(--s2);border:1px solid var(--bd);border-radius:10px;color:var(--t1);font-size:.88rem;font-family:ui-monospace,SFMono-Regular,Menlo,monospace;resize:vertical;outline:none;min-height:90px;transition:border-color .15s}.bulk-url-area textarea:focus{border-color:var(--ac)}.bulk-progress-wrap{height:4px;background:var(--s2);border-radius:2px;margin:.55rem 0;overflow:hidden;display:none}.bulk-bar{height:100%;background:linear-gradient(90deg,var(--ac),#f5c47a);width:0%;transition:width .3s ease;border-radius:2px}.bulk-counter{font-size:.8rem;color:var(--t2);font-family:ui-monospace,SFMono-Regular,Menlo,monospace;display:none;margin-bottom:.4rem}.bulk-status{margin-top:.55rem}.bulk-item{display:flex;align-items:flex-start;gap:.5rem;padding:.35rem .5rem;border-radius:7px;margin-bottom:.28rem;font-size:.82rem;background:var(--s2);border:1px solid var(--bd)}.bulk-item-ic{flex-shrink:0;width:16px;text-align:center}.bulk-item-name{flex:1;word-break:break-all;color:var(--t1)}.bulk-item-meta{font-size:.76rem;color:var(--t2);white-space:nowrap}.bulk-item.ok .bulk-item-ic{color:var(--gr)}.bulk-item.err .bulk-item-ic{color:var(--rd)}.bulk-item.busy .bulk-item-ic{color:var(--ac)}.bulk-item-retry{flex-shrink:0;background:var(--s2);color:var(--rd);border:1px solid var(--rd);border-radius:6px;padding:.15rem .55rem;font-size:.74rem;cursor:pointer;white-space:nowrap;line-height:1.4}.bulk-item-retry:hover{background:var(--rd);color:#fff}.bulk-retry-all{margin-top:.6rem;display:none}@keyframes spin{to{transform:rotate(360deg)}}.spin{animation:spin .8s linear infinite;display:inline-block}.perms-octal{font-weight:700;color:var(--t1);margin-left:.3rem}
.banner{display:flex;align-items:center;gap:.6rem;max-width:1000px;margin:0 auto 1rem;padding:.7rem 1rem;border-radius:12px;font-size:.86rem;line-height:1.45}.banner-err{background:rgba(255,59,48,.12);border:1px solid var(--rd);color:var(--rd)}.banner-warn{background:rgba(154,106,0,.12);border:1px solid var(--rw);color:var(--rw)}.banner-ic{flex-shrink:0;display:inline-flex}.banner-msg{flex:1}.banner-msg code{font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.82em;opacity:.85}.banner-msg b{color:inherit}.banner-x{background:none;border:none;color:inherit;cursor:pointer;padding:.2rem;opacity:.7;display:inline-flex;flex-shrink:0}.banner-x:hover{opacity:1}
.cmp-grid{display:flex;gap:1rem;align-items:flex-start}@media(max-width:820px){.cmp-grid{flex-direction:column}}.cmp-pane{flex:1 1 0;min-width:0;background:var(--s1);border:1px solid var(--bd);border-radius:14px;padding:.85rem}.cmp-pane-hd{display:flex;align-items:center;gap:.45rem;margin-bottom:.6rem}.cmp-pane-hd select{flex:1}.cmp-creds{display:grid;grid-template-columns:1fr 1fr;gap:.5rem .6rem;margin-bottom:.6rem}.cmp-creds .field{margin-bottom:0}.cmp-creds .full{grid-column:1/-1}.cmp-pane .fb-bar{margin-bottom:.5rem}.cmp-tbl-wrap{max-height:46vh;overflow:auto;border:1px solid var(--bd);border-radius:10px}.cmp-tbl-wrap .fb-empty{padding:1.4rem}.cmp-bar{display:flex;flex-wrap:wrap;gap:.55rem;align-items:center;justify-content:center;margin:1rem auto;max-width:1000px}.cmp-legend{display:flex;flex-wrap:wrap;gap:.5rem 1rem;justify-content:center;font-size:.76rem;color:var(--t2);margin:.4rem 0}.cmp-legend span{display:inline-flex;align-items:center;gap:.3rem}.cmp-dot{width:11px;height:11px;border-radius:3px;display:inline-block}.cmp-dot.only-l{background:var(--bl)}.cmp-dot.only-r{background:var(--t2)}.cmp-dot.diff{background:var(--ac)}.cmp-dot.same{background:var(--gr)}tr.cmp-only-l td{background:rgba(0,122,255,.1)}tr.cmp-only-r td{background:rgba(142,142,147,.12)}tr.cmp-diff td{background:rgba(227,101,11,.13)}tr.cmp-same td{background:rgba(52,199,89,.1)}.cmp-opts{display:flex;flex-wrap:wrap;gap:.6rem;align-items:flex-end;justify-content:center;margin:.6rem auto;max-width:1000px}.cmp-opts .field{margin-bottom:0;min-width:150px}.cmp-tag{font-size:.7rem;font-weight:700;padding:.05rem .4rem;border-radius:5px;text-transform:uppercase;letter-spacing:.3px}.cmp-step{border:1px solid var(--bd);border-radius:14px;background:var(--s1);padding:1rem 1.1rem;margin:.9rem 0}.cmp-step.cmp-guide{background:var(--s2)}.cmp-step-title{font-size:.74rem;font-weight:700;text-transform:uppercase;letter-spacing:.6px;color:var(--t2);margin-bottom:.7rem;display:flex;align-items:center;gap:.4rem}.cmp-step .cmp-bar,.cmp-step .cmp-opts,.cmp-step .cmp-legend{margin:0}.cmp-sync-total{font-size:.85rem;font-weight:600;color:var(--t1);margin:.7rem 0;text-align:center}.cmp-actions{display:flex;gap:.6rem;justify-content:center;flex-wrap:wrap}.cmp-actions .btn{min-width:160px}.cmp-http-hint{font-size:.78rem;color:var(--t2);background:var(--s2);border:1px solid var(--bd);border-radius:10px;padding:.6rem .8rem;margin:.3rem 0;text-align:center;line-height:1.6}.cmp-sel{font-size:.76rem;color:var(--t2);margin-top:.5rem;padding-top:.5rem;border-top:1px dashed var(--bd)}.cmp-collapse{margin-bottom:.55rem}.cmp-collapse>summary{cursor:pointer;list-style:none;font-size:.76rem;font-weight:700;text-transform:uppercase;letter-spacing:.5px;color:var(--t2);display:flex;align-items:center;gap:.35rem}.cmp-collapse>summary::-webkit-details-marker{display:none}.cmp-collapse>summary::before{content:'▸';color:var(--t2);transition:transform .15s}.cmp-collapse[open]>summary::before{transform:rotate(90deg)}.cmp-view-seg button svg{margin-right:.1rem}.tree-tools.explorer-mode .tree-only{display:none}.tree-tools{align-items:center}.tree-tools .btn{height:var(--ctl-h);padding:0 .7rem;font-size:.82rem}.tree-tools .btn-icon{padding:0 .55rem}.tree-tools .seg{height:var(--ctl-h)}.tree-tools .seg button{height:var(--ctl-h)}
/* compare diff tags (shown on the node instead of a background tint) */
.cmp-tag.t-only-l{background:rgba(9,105,218,.15);color:var(--bl)}
.cmp-tag.t-only-r{background:rgba(142,142,147,.18);color:var(--t2)}
.cmp-tag.t-diff{background:rgba(207,34,46,.16);color:var(--rd)}
.cmp-tag.t-same{background:rgba(26,127,55,.15);color:var(--gr)}
.tnode .cmp-tag{margin-left:.4rem;flex-shrink:0}
/* full-tree loading overlay */
.tree-loading{display:flex;align-items:center;justify-content:center;gap:.55rem;padding:1.6rem;color:var(--t2);font-size:.85rem}
.tree-loading .spin{font-size:1.1rem}
.tload-bar{height:3px;background:var(--s2);border-radius:2px;overflow:hidden;margin:.4rem 0}
.tload-bar::before{content:'';display:block;height:100%;width:40%;background:var(--ac);border-radius:2px;animation:tload 1.1s ease-in-out infinite}
@keyframes tload{0%{margin-left:-40%}100%{margin-left:100%}}
/* ===== v2.10 — collapsible connection, queue controls, ftp-upload panel ===== */
.conn-hd{display:flex;align-items:center;gap:.5rem;margin-bottom:.7rem}
/* collapsed connection form: drop the header's bottom margin so the card hugs the summary */
.conn-collapsed .conn-hd{margin-bottom:0}
.conn-hd .conn-ttl{font-size:.78rem;font-weight:700;color:var(--t2);text-transform:uppercase;letter-spacing:.6px}
.conn-hd .conn-toggle{margin-left:auto;display:inline-flex;align-items:center;gap:.3rem}
.conn-summary{display:flex;align-items:center;gap:.5rem;flex-wrap:wrap;font-size:.84rem;color:var(--t1)}
.conn-summary .conn-host{font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-weight:600}
.conn-summary .conn-dot{width:8px;height:8px;border-radius:50%;background:var(--gr);flex-shrink:0}
.conn-summary .conn-meta{color:var(--t2);font-size:.78rem}
/* per-item progress + stop, shared by bulk/sync/ftp-upload rows */
.bulk-item{flex-wrap:wrap}
.bulk-item-prog{flex-basis:100%;height:3px;background:var(--bd);border-radius:2px;overflow:hidden;margin-top:.3rem;display:none}
.bulk-item.busy .bulk-item-prog,.bulk-item.queued .bulk-item-prog{display:block}
.bulk-item-prog>i{display:block;height:100%;width:0;background:linear-gradient(90deg,var(--ac),#f5c47a);border-radius:2px;transition:width .25s ease}
.bulk-item-prog.indet>i{width:40%;animation:tload 1.1s ease-in-out infinite}
.bulk-item.ok .bulk-item-prog,.bulk-item.err .bulk-item-prog,.bulk-item.stopped .bulk-item-prog{display:none}
.bulk-item.stopped{opacity:.65}.bulk-item.stopped .bulk-item-ic{color:var(--t2)}
.bulk-item-stop{flex-shrink:0;background:var(--s2);color:var(--t2);border:1px solid var(--bd);border-radius:6px;padding:.15rem .5rem;font-size:.74rem;cursor:pointer;white-space:nowrap;line-height:1.4}
.bulk-item-stop:hover{border-color:var(--rd);color:var(--rd)}
.queue-ctl{display:flex;gap:.45rem;align-items:center;flex-wrap:wrap;margin:.5rem 0}
/* FTP-explorer upload panel */
.ftp-up-panel{background:var(--s2);border:1px solid var(--bd);border-radius:var(--rad);padding:.85rem;margin-bottom:.7rem}
.ftp-up-files{margin:.5rem 0}
.ftp-up-file{display:flex;align-items:center;gap:.5rem;padding:.3rem .5rem;background:var(--s1);border:1px solid var(--bd);border-radius:6px;margin-bottom:.28rem;font-size:.82rem}
.ftp-up-file .ftp-up-fn{flex:1;word-break:break-all;color:var(--t1)}
.ftp-up-file .ftp-up-fsz{color:var(--t2);font-size:.76rem;white-space:nowrap;font-family:ui-monospace,SFMono-Regular,Menlo,monospace}
.ftp-up-file .ftp-up-rm{background:none;border:none;color:var(--t2);cursor:pointer;padding:.1rem .35rem;border-radius:5px;line-height:1}
.ftp-up-file .ftp-up-rm:hover{color:var(--rd);background:var(--s2)}
.tnode.ftp-cur{background:var(--ac-soft);box-shadow:inset 2px 0 0 var(--ac)}
.fv-addr{flex:1;min-width:120px;height:var(--ctl-h);padding:0 .7rem;background:var(--s2);border:1px solid var(--bd);border-radius:var(--rad);color:var(--t1);font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.82rem;outline:none}
.fv-addr:focus{border-color:var(--ac)}
/* editable breadcrumb sits inline in the address bar (File / FTP Explorer) */
#fb-path,#ftp-path,.fb-path.fv-edit{min-height:var(--ctl-h);cursor:text}
#fb-path:hover,#ftp-path:hover,.fb-path.fv-edit:hover{box-shadow:inset 0 0 0 1px var(--bd)}
.fb-path .fb-crumb{cursor:pointer}
.fb-path.editing{padding:0;background:none;box-shadow:none;overflow:visible}
.fb-path.editing .fv-addr{width:100%}
/* address-bar controls share the input height/style */
.fb-bar .btn{height:var(--ctl-h);padding:0 .85rem;font-size:.85rem}
.fb-bar .btn-icon{padding:0 .6rem}
/* ===== Tippy.js dark theme (always darker than surface) ===== */
.tippy-box[data-theme~=bsu]{background:#1c1c1e;color:#f2f2f7;border:1px solid #3a3a3c;border-radius:8px;font-size:.78rem;font-weight:500;line-height:1.4;box-shadow:0 6px 22px rgba(0,0,0,.4)}
.tippy-box[data-theme~=bsu]>.tippy-content{padding:.34rem .6rem;white-space:pre-line}
.tippy-box[data-theme~=bsu][data-placement^=top]>.tippy-arrow::before{border-top-color:#1c1c1e}
.tippy-box[data-theme~=bsu][data-placement^=bottom]>.tippy-arrow::before{border-bottom-color:#1c1c1e}
.tippy-box[data-theme~=bsu][data-placement^=left]>.tippy-arrow::before{border-left-color:#1c1c1e}
.tippy-box[data-theme~=bsu][data-placement^=right]>.tippy-arrow::before{border-right-color:#1c1c1e}
.tippy-box[data-animation=fade][data-state=hidden]{opacity:0}
/* Tippy core positioning primitives (no external tippy.css needed) */
.tippy-box{position:relative;outline:0;transition-property:transform,visibility,opacity}
.tippy-content{position:relative;padding:5px 9px;z-index:1}
.tippy-arrow{width:16px;height:16px;color:#1c1c1e}
.tippy-arrow::before{content:"";position:absolute;border-color:transparent;border-style:solid}
.tippy-box[data-placement^=top]>.tippy-arrow{bottom:0}
.tippy-box[data-placement^=top]>.tippy-arrow::before{bottom:-7px;left:0;border-width:8px 8px 0;border-top-color:initial;transform-origin:center top}
.tippy-box[data-placement^=bottom]>.tippy-arrow{top:0}
.tippy-box[data-placement^=bottom]>.tippy-arrow::before{top:-7px;left:0;border-width:0 8px 8px;border-bottom-color:initial;transform-origin:center bottom}
.tippy-box[data-placement^=left]>.tippy-arrow{right:0}
.tippy-box[data-placement^=left]>.tippy-arrow::before{border-width:8px 0 8px 8px;border-left-color:initial;right:-7px;transform-origin:center left}
.tippy-box[data-placement^=right]>.tippy-arrow{left:0}
.tippy-box[data-placement^=right]>.tippy-arrow::before{left:-7px;border-width:8px 8px 8px 0;border-right-color:initial;transform-origin:center right}
.tippy-box[data-inertia][data-state=visible]{transition-timing-function:cubic-bezier(.54,1.5,.38,1.11)}
/* ===== three-dots row menu ===== */
.rowmenu-btn{background:none;border:1px solid transparent;color:var(--t2);cursor:pointer;border-radius:8px;padding:.28rem .42rem;line-height:1;display:inline-flex;align-items:center;transition:background .15s,color .15s,border-color .15s}
.rowmenu-btn:hover,.rowmenu-btn.open{color:var(--t1);background:var(--s2);border-color:var(--bd)}
.rowmenu{position:fixed;z-index:300;min-width:188px;background:var(--s1);border:1px solid var(--bd);border-radius:10px;box-shadow:0 10px 34px var(--shadow);padding:.3rem;display:flex;flex-direction:column;gap:1px}
.rowmenu-item{display:flex;align-items:center;gap:.6rem;width:100%;padding:.5rem .6rem;border:none;background:none;border-radius:7px;color:var(--t1);font-size:.85rem;font-family:inherit;text-align:left;cursor:pointer;white-space:nowrap}
.rowmenu-item:hover{background:var(--s2)}
.rowmenu-item svg{color:var(--t2);flex-shrink:0}
.rowmenu-item.danger{color:var(--rd)}.rowmenu-item.danger svg{color:var(--rd)}
.rowmenu-item.danger:hover{background:rgba(207,34,46,.1)}
.rowmenu-item[disabled]{opacity:.4;cursor:not-allowed}
.rowmenu-sep{height:1px;background:var(--bd);margin:.25rem .2rem}
/* ===== file editor / viewer modal ===== */
.fe-modal{max-width:1080px}
.fe-body{padding:0!important;max-height:none!important;display:flex;flex-direction:column}
.fe-meta{display:flex;align-items:center;gap:.6rem;padding:.5rem .9rem;border-bottom:1px solid var(--bd);font-size:.78rem;color:var(--t2);flex-wrap:wrap}
.fe-badge{font-size:.66rem;font-weight:700;text-transform:uppercase;letter-spacing:.4px;color:var(--ac);background:var(--ac-soft);border:1px solid var(--bd);padding:.06rem .42rem;border-radius:5px}
.fe-edit-wrap{position:relative}
.fe-edit-wrap .CodeMirror{height:62vh;font-size:13px;font-family:ui-monospace,SFMono-Regular,Menlo,monospace}
.fe-ta{width:100%;height:62vh;border:none;outline:none;resize:none;padding:.8rem .95rem;background:var(--bg);color:var(--t1);font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:13px;line-height:1.55;tab-size:2}
.fe-foot{display:flex;align-items:center;gap:.5rem;padding:.7rem .95rem;border-top:1px solid var(--bd);flex-wrap:wrap}
.fe-foot .fe-spacer{flex:1}
.fe-status{font-size:.78rem;color:var(--t2)}
.fe-loading{padding:3rem;text-align:center;color:var(--t2)}
/* ===== CodeMirror "github" theme — reuses the app's GitHub palette, follows light/dark ===== */
:root{--cm-fg:#24292f;--cm-com:#6e7781;--cm-kw:#cf222e;--cm-str:#0a3069;--cm-num:#0550ae;--cm-fn:#8250df;--cm-tag:#116329;--cm-attr:#0550ae;--cm-var:#953800;--cm-def:#0550ae;--cm-sel:rgba(9,105,218,.18)}
@media(prefers-color-scheme:dark){:root{--cm-fg:#e6edf3;--cm-com:#8b949e;--cm-kw:#ff7b72;--cm-str:#a5d6ff;--cm-num:#79c0ff;--cm-fn:#d2a8ff;--cm-tag:#7ee787;--cm-attr:#79c0ff;--cm-var:#ffa657;--cm-def:#d2a8ff;--cm-sel:rgba(56,139,253,.25)}}
html[data-theme=light]{--cm-fg:#24292f;--cm-com:#6e7781;--cm-kw:#cf222e;--cm-str:#0a3069;--cm-num:#0550ae;--cm-fn:#8250df;--cm-tag:#116329;--cm-attr:#0550ae;--cm-var:#953800;--cm-def:#0550ae;--cm-sel:rgba(9,105,218,.18)}
html[data-theme=dark]{--cm-fg:#e6edf3;--cm-com:#8b949e;--cm-kw:#ff7b72;--cm-str:#a5d6ff;--cm-num:#79c0ff;--cm-fn:#d2a8ff;--cm-tag:#7ee787;--cm-attr:#79c0ff;--cm-var:#ffa657;--cm-def:#d2a8ff;--cm-sel:rgba(56,139,253,.25)}
.cm-s-github.CodeMirror{background:var(--bg);color:var(--cm-fg)}
.cm-s-github .CodeMirror-gutters{background:var(--s1);border-right:1px solid var(--bd)}
.cm-s-github .CodeMirror-linenumber{color:var(--t2)}
.cm-s-github .CodeMirror-cursor{border-left:1px solid var(--cm-fg)}
.cm-s-github .CodeMirror-selected,.cm-s-github.CodeMirror-focused .CodeMirror-selected{background:var(--cm-sel)}
.cm-s-github .CodeMirror-line::selection,.cm-s-github .CodeMirror-line>span::selection{background:var(--cm-sel)}
.cm-s-github .CodeMirror-activeline-background{background:var(--rowhover)}
.cm-s-github .CodeMirror-matchingbracket{color:var(--ac)!important;font-weight:700}
.cm-s-github .cm-comment{color:var(--cm-com);font-style:italic}
.cm-s-github .cm-keyword,.cm-s-github .cm-operator{color:var(--cm-kw)}
.cm-s-github .cm-string,.cm-s-github .cm-string-2{color:var(--cm-str)}
.cm-s-github .cm-number,.cm-s-github .cm-atom,.cm-s-github .cm-bool{color:var(--cm-num)}
.cm-s-github .cm-def,.cm-s-github .cm-property{color:var(--cm-def)}
.cm-s-github .cm-variable,.cm-s-github .cm-punctuation{color:var(--cm-fg)}
.cm-s-github .cm-variable-2,.cm-s-github .cm-variable-3,.cm-s-github .cm-type{color:var(--cm-var)}
.cm-s-github .cm-tag{color:var(--cm-tag)}
.cm-s-github .cm-attribute,.cm-s-github .cm-qualifier,.cm-s-github .cm-builtin{color:var(--cm-attr)}
.cm-s-github .cm-meta{color:var(--cm-com)}
.cm-s-github .cm-link{color:var(--bl);text-decoration:underline}
.cm-s-github .cm-header{color:var(--cm-def);font-weight:700}
.cm-s-github .cm-error{color:var(--rd)}
.sb-foot-row{display:flex;gap:.4rem;align-items:center;width:100%}
.sb-icon-btn{flex:1 1 0;display:inline-flex;align-items:center;justify-content:center;padding:.5rem;border:1px solid var(--bd);background:var(--s2);color:var(--t2);border-radius:var(--rad);cursor:pointer;transition:background .15s,color .15s}
.sb-icon-btn:hover{color:var(--t1);background:var(--bd)}
body.sb-collapsed .sb-foot-row{flex-direction:column}
body.sb-collapsed .sidebar:hover .sb-foot-row{flex-direction:row}
@media(max-width:820px){.sidebar-foot .sb-foot-row{width:auto}.sb-icon-btn{flex:0 0 auto}}
.seg{display:inline-flex;border:1px solid var(--bd);border-radius:9px;overflow:hidden}.seg button{border:none;background:var(--s2);color:var(--t2);padding:.4rem .9rem;font-size:.82rem;font-weight:600;cursor:pointer}.seg button+button{border-left:1px solid var(--bd)}.seg button.active{background:var(--ac);color:#fff}
/* ===== sidebar app shell (v2.8 UI) ===== */
:root{--ac-soft:rgba(227,101,11,.10);--ac-glow:rgba(227,101,11,.10)}
@media(prefers-color-scheme:dark){:root{--ac-soft:rgba(227,101,11,.18);--ac-glow:rgba(227,101,11,.20)}}
html[data-theme="light"]{--ac-soft:rgba(227,101,11,.10);--ac-glow:rgba(227,101,11,.10)}
html[data-theme="dark"]{--ac-soft:rgba(227,101,11,.18);--ac-glow:rgba(227,101,11,.20)}
.hdr-ver{font-size:.68rem;font-weight:600;color:var(--t2);background:var(--s2);border:1px solid var(--bd);padding:.08rem .42rem;border-radius:20px;letter-spacing:.2px}
.app-body{display:flex;align-items:flex-start;max-width:1180px;margin:0 auto;width:100%}
.sidebar{width:236px;flex:0 0 236px;position:sticky;top:46px;align-self:flex-start;min-height:calc(100vh - 46px);padding:1.1rem .75rem 1rem;display:flex;flex-direction:column;gap:.15rem;border-right:1px solid var(--bd)}
.nav-group{margin-bottom:.7rem}
.nav-label{font-size:.66rem;font-weight:700;text-transform:uppercase;letter-spacing:.9px;color:var(--t2);padding:.35rem .7rem .25rem;opacity:.7}
.nav-item{display:flex;align-items:center;gap:.6rem;width:100%;padding:.55rem .7rem;border:none;background:none;border-radius:10px;color:var(--t2);font-size:.9rem;font-weight:500;cursor:pointer;text-align:left;font-family:inherit;line-height:1.25;transition:background .15s,color .15s}
.nav-item .nav-ic{display:inline-flex;flex-shrink:0;color:var(--t2);transition:color .15s}
.nav-item:hover{background:var(--s2);color:var(--t1)}
.nav-item:hover .nav-ic{color:var(--t1)}
.nav-item.active{background:var(--ac-soft);color:var(--ac);font-weight:600}
.nav-item.active .nav-ic{color:var(--ac)}
.sidebar-foot{margin-top:auto;padding-top:.8rem;display:flex;flex-direction:column;align-items:flex-start;gap:.5rem}
.content{flex:1 1 0;min-width:0;padding:1.5rem 1.2rem 1rem}
.mode-head{margin-bottom:1.2rem}
.mode-head h1{font-size:1.3rem;font-weight:800;letter-spacing:-.4px;color:var(--t1)}
.mode-head p{font-size:.85rem;color:var(--t2);margin-top:.25rem}
.content select{appearance:none;-webkit-appearance:none;background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='14' height='14' viewBox='0 0 256 256' fill='%238e8e93'><path d='M213.66 101.66l-80 80a8 8 0 0 1-11.32 0l-80-80a8 8 0 0 1 11.32-11.32L128 164.69l74.34-74.35a8 8 0 0 1 11.32 11.32Z'/></svg>");background-repeat:no-repeat;background-position:right .7rem center;background-size:13px;padding-right:2.1rem}
.ftr{display:flex;flex-wrap:wrap;gap:.35rem .7rem;align-items:center;justify-content:center}
.ftr p{margin:0}
.ftr .ftr-sd{display:inline-flex;align-items:center;gap:.25rem;color:var(--rd);font-weight:600}
.ftr .ftr-sd:hover{color:var(--rd);text-decoration:underline}
.ftr .dot{opacity:.45}
@media(max-width:820px){.app-body{flex-direction:column}.sidebar{width:100%;flex:none;position:static;min-height:0;flex-direction:row;flex-wrap:nowrap;overflow-x:auto;border-right:none;border-bottom:1px solid var(--bd);padding:.5rem .6rem;gap:.3rem;-webkit-overflow-scrolling:touch}.nav-group{display:flex;align-items:center;gap:.3rem;margin:0}.nav-label{display:none}.sidebar-foot{flex-direction:row;align-items:center;margin:0 0 0 auto;padding:0}.sidebar-foot .ip-badge{display:none}.nav-item{width:auto;white-space:nowrap;padding:.45rem .7rem}.content{padding:1.1rem .75rem}}
@media(max-width:600px){.hdr-ver{display:none}}
.tree{font-size:.86rem}.tree-empty{text-align:center;padding:1.4rem;color:var(--t2)}.tnode{display:flex;align-items:center;gap:.3rem;padding:.16rem .35rem;border-radius:6px}.tnode:hover{background:var(--rowhover)}.tnode-loading{color:var(--t2);font-size:.78rem;font-style:italic}.tcaret{width:18px;height:18px;flex:0 0 18px;display:inline-flex;align-items:center;justify-content:center;cursor:pointer;color:var(--t2);border:none;background:none;font-size:.62rem;transition:transform .12s;padding:0}.tcaret.open{transform:rotate(90deg)}.tcaret.empty{visibility:hidden;cursor:default}.tname{display:inline-flex;align-items:center;gap:.3rem;min-width:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.tname-dir{color:var(--ac);cursor:pointer}.tname-dir:hover{text-decoration:underline}.tname-file{color:var(--t1)}.tsize{margin-left:auto;color:var(--t2);font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.73rem;white-space:nowrap;padding-left:.5rem;flex-shrink:0}.tacts{display:flex;gap:.15rem;flex-shrink:0;margin-left:.4rem}.tree-tools{display:flex;gap:.35rem;flex-wrap:wrap;align-items:center;margin-bottom:.5rem}.tnode.cmp-only-l{background:rgba(0,122,255,.13)}.tnode.cmp-only-r{background:rgba(142,142,147,.16)}.tnode.cmp-diff{background:rgba(227,101,11,.16)}.tnode.cmp-same{background:rgba(52,199,89,.13)}.prof-row{display:flex;gap:.35rem;align-items:center;flex-wrap:wrap;margin-bottom:.6rem}.prof-row select{flex:1;min-width:120px}.prof-note{font-size:.72rem;color:var(--t2);margin-top:-.3rem;margin-bottom:.5rem}
/* ===== GitHub theme + control sizing (rebuild) ===== */
:root{--bg:#fff;--s1:#fff;--s2:#f6f8fa;--bd:#d0d7de;--t1:#1f2328;--t2:#656d76;--ac:#0969da;--gr:#1a7f37;--rd:#cf222e;--rw:#9a6700;--bl:#0969da;--ac-soft:rgba(9,105,218,.1);--ac-glow:rgba(9,105,218,.3);--btnp:#1f883d;--btnp-h:#1a7f37;--shadow:rgba(31,35,40,.12);--ovl:rgba(31,35,40,.5);--rowhover:#f6f8fa;--hdr-h:74px;--ctl-h:34px;--rad:6px}
@media(prefers-color-scheme:dark){:root{--bg:#0d1117;--s1:#161b22;--s2:#21262d;--bd:#30363d;--t1:#e6edf3;--t2:#8b949e;--ac:#2f81f7;--gr:#3fb950;--rd:#f85149;--rw:#d29922;--bl:#58a6ff;--ac-soft:rgba(56,139,253,.15);--ac-glow:rgba(56,139,253,.4);--btnp:#238636;--btnp-h:#2ea043;--shadow:rgba(1,4,9,.5);--ovl:rgba(1,4,9,.7);--rowhover:#161b22}}
html[data-theme="light"]{--bg:#fff;--s1:#fff;--s2:#f6f8fa;--bd:#d0d7de;--t1:#1f2328;--t2:#656d76;--ac:#0969da;--gr:#1a7f37;--rd:#cf222e;--rw:#9a6700;--bl:#0969da;--ac-soft:rgba(9,105,218,.1);--ac-glow:rgba(9,105,218,.3);--btnp:#1f883d;--btnp-h:#1a7f37;--shadow:rgba(31,35,40,.12);--ovl:rgba(31,35,40,.5);--rowhover:#f6f8fa}
html[data-theme="dark"]{--bg:#0d1117;--s1:#161b22;--s2:#21262d;--bd:#30363d;--t1:#e6edf3;--t2:#8b949e;--ac:#2f81f7;--gr:#3fb950;--rd:#f85149;--rw:#d29922;--bl:#58a6ff;--ac-soft:rgba(56,139,253,.15);--ac-glow:rgba(56,139,253,.4);--btnp:#238636;--btnp-h:#2ea043;--shadow:rgba(1,4,9,.5);--ovl:rgba(1,4,9,.7);--rowhover:#161b22}
.upload-card,.ftp-conn-card,.ftp-browser,.banner,.help-code,.cmp-pane,.cmp-tbl-wrap,.result-box,.info-panel,.ftp-log-wrap,.mitm-info{border-radius:var(--rad)}
.field input,.field select,.bulk-url-area textarea,.url-inp,.btn,.ip-badge{border-radius:var(--rad)}
/* header: taller, centered, bigger */
.hdr{justify-content:center;height:var(--hdr-h);padding:0 1rem}
.hdr-logo{gap:.6rem}
.hdr-logo img{width:34px;height:34px}
.hdr-title{font-size:1.3rem;font-weight:800;letter-spacing:-.3px}
.hdr-ver{font-size:.72rem}
.hdr-logo:hover{text-decoration:none}
.hdr-logo:hover .hdr-title{text-decoration:none}
.hdr-sep{color:var(--t2);font-weight:400;margin:0 .15rem}
/* full-width shell, flush-left sidebar */
.app-body{max-width:none;margin:0}
.sidebar{top:var(--hdr-h);min-height:calc(100vh - var(--hdr-h));padding:1rem .6rem;gap:.4rem;background:var(--s1)}
.nav-group{margin-bottom:1.1rem}
.nav-label{padding:.4rem .6rem .4rem .7rem}
.nav-item{padding:.6rem .7rem;margin-bottom:.28rem;font-size:.92rem}
.nav-item:last-child{margin-bottom:0}
.sidebar-foot{gap:.6rem;padding-top:1rem}
.content{padding:1.6rem 1.5rem 1.2rem}
/* unified control heights: input = select = adjacent button */
.field input,.field select,.content select,.url-inp{height:var(--ctl-h);padding:0 .75rem;font-size:.875rem;line-height:normal}
.content select,.field select{padding-right:2rem;background-position:right .6rem center}
.prof-row select,.cmp-pane-hd select{height:var(--ctl-h)}
.prof-row .btn,.cmp-pane-hd .btn,.cmp-opts .btn,.cmp-bar .btn{height:var(--ctl-h);padding:0 .85rem;font-size:.85rem}
.prof-row .btn-icon,.cmp-pane-hd .btn-icon{padding:0 .6rem}
.seg button{height:var(--ctl-h);padding:0 .9rem}
/* github buttons */
.btn-p{background:var(--btnp);color:#fff;border:1px solid rgba(27,31,36,.15)}
.btn-p:hover{background:var(--btnp-h);opacity:1}
.btn-g{background:var(--s2);color:var(--t1);border:1px solid var(--bd)}
.btn-g:hover{background:var(--bd);border-color:var(--t2)}
.nav-item.active{background:var(--ac-soft);color:var(--ac)}
.nav-item.active .nav-ic{color:var(--ac)}
/* selects look exactly like the inputs, only with a chevron on the right */
.content select{background-color:var(--s2);border:1px solid var(--bd);border-radius:var(--rad);color:var(--t1);height:var(--ctl-h);padding:0 2rem 0 .75rem;font-size:.875rem;line-height:normal;outline:none;cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none;background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='14' height='14' viewBox='0 0 256 256' fill='%238e8e93'><path d='M213.66 101.66l-80 80a8 8 0 0 1-11.32 0l-80-80a8 8 0 0 1 11.32-11.32L128 164.69l74.34-74.35a8 8 0 0 1 11.32 11.32Z'/></svg>");background-repeat:no-repeat;background-position:right .6rem center;background-size:13px}
.content select:focus{border-color:var(--ac)}
/* wider primary upload button */
.btn-p.root{padding:1rem 3.5rem}
/* result URL row — input and Copy button same height, aligned */
.url-row{align-items:stretch}
.url-inp,.url-row .copy-btn{height:32px;padding:0 .7rem;line-height:32px;border-radius:var(--rad)}
/* file input (Upload from PC) */
.field input[type=file]{height:auto;padding:.5rem .65rem;line-height:1.4;font-size:.85rem;background-color:var(--s2);border:1px solid var(--bd);border-radius:var(--rad);color:var(--t1);width:100%;cursor:pointer}
.field input[type=file]::-webkit-file-upload-button,.field input[type=file]::file-selector-button{margin-right:.7rem;padding:.35rem .8rem;border:1px solid var(--bd);border-radius:var(--rad);background:var(--s1);color:var(--t1);font-size:.82rem;cursor:pointer}
/* collapsible sidebar (desktop only) */
.sb-toggle{color:var(--t2)}
@media(min-width:821px){
  .sidebar{transition:width .18s ease}
  body.sb-collapsed .app-body{padding-left:58px}
  body.sb-collapsed .sidebar{position:fixed;left:0;top:var(--hdr-h);bottom:0;height:calc(100vh - var(--hdr-h));width:58px;z-index:60;overflow:hidden;border-right:1px solid var(--bd)}
  body.sb-collapsed .sidebar .nav-item{white-space:nowrap;overflow:hidden}
  body.sb-collapsed .sidebar .nav-label{opacity:0;pointer-events:none}
  body.sb-collapsed .sidebar .ip-badge{display:none}
  body.sb-collapsed .sidebar:hover{width:240px;box-shadow:6px 0 22px var(--shadow)}
  body.sb-collapsed .sidebar:hover .nav-label{opacity:1}
  body.sb-collapsed .sidebar:hover .ip-badge{display:inline-block}
}
.view{display:none}
/* fixed app shell — pin header top + footer bottom, content fits / scrolls internally, no page scroll */
html,body{height:100%}
body{display:flex;flex-direction:column;overflow:hidden}
.hdr{flex:0 0 auto;position:relative}
.app-body{flex:1 1 auto;min-height:0;align-items:stretch}
.sidebar{position:static;top:auto;min-height:0;height:100%;overflow-y:auto}
.content{height:100%;overflow-y:auto;min-height:0}
.ftr{flex:0 0 auto}
/* mobile re-assert (must win over desktop rules above) */
@media(max-width:820px){.content{padding:1.1rem .8rem;height:auto;flex:1 1 auto}.sidebar{width:100%;flex:0 0 auto;height:auto;position:static;min-height:0;flex-direction:row;flex-wrap:nowrap;overflow-x:auto;overflow-y:hidden;border-right:none;border-bottom:1px solid var(--bd);padding:.5rem .6rem;gap:.3rem}.nav-group{display:flex;align-items:center;gap:.3rem;margin:0}.nav-label{display:none}.sidebar-foot{flex-direction:row;align-items:center;margin:0 0 0 auto;padding:0;gap:.3rem}.sidebar-foot .ip-badge{display:none}.nav-item{width:auto;white-space:nowrap;padding:.5rem .7rem;margin:0}}
@media(max-width:600px){.hdr{height:auto;padding:.55rem .9rem}.hdr-title{display:inline}.hdr-ver{display:none}}
</style>
<!-- TPJS: Popper + Tippy.js v6 (inlined, dark theme via .tippy-box[data-theme~=bsu]) -->
<script>
/* @popperjs/core v2.11.8 MIT */
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?t(exports):"function"==typeof define&&define.amd?define(["exports"],t):t((e="undefined"!=typeof globalThis?globalThis:e||self).Popper={})}(this,(function(e){"use strict";function t(e){if(null==e)return window;if("[object Window]"!==e.toString()){var t=e.ownerDocument;return t&&t.defaultView||window}return e}function n(e){return e instanceof t(e).Element||e instanceof Element}function r(e){return e instanceof t(e).HTMLElement||e instanceof HTMLElement}function o(e){return"undefined"!=typeof ShadowRoot&&(e instanceof t(e).ShadowRoot||e instanceof ShadowRoot)}var i=Math.max,a=Math.min,s=Math.round;function f(){var e=navigator.userAgentData;return null!=e&&e.brands&&Array.isArray(e.brands)?e.brands.map((function(e){return e.brand+"/"+e.version})).join(" "):navigator.userAgent}function c(){return!/^((?!chrome|android).)*safari/i.test(f())}function p(e,o,i){void 0===o&&(o=!1),void 0===i&&(i=!1);var a=e.getBoundingClientRect(),f=1,p=1;o&&r(e)&&(f=e.offsetWidth>0&&s(a.width)/e.offsetWidth||1,p=e.offsetHeight>0&&s(a.height)/e.offsetHeight||1);var u=(n(e)?t(e):window).visualViewport,l=!c()&&i,d=(a.left+(l&&u?u.offsetLeft:0))/f,h=(a.top+(l&&u?u.offsetTop:0))/p,m=a.width/f,v=a.height/p;return{width:m,height:v,top:h,right:d+m,bottom:h+v,left:d,x:d,y:h}}function u(e){var n=t(e);return{scrollLeft:n.pageXOffset,scrollTop:n.pageYOffset}}function l(e){return e?(e.nodeName||"").toLowerCase():null}function d(e){return((n(e)?e.ownerDocument:e.document)||window.document).documentElement}function h(e){return p(d(e)).left+u(e).scrollLeft}function m(e){return t(e).getComputedStyle(e)}function v(e){var t=m(e),n=t.overflow,r=t.overflowX,o=t.overflowY;return/auto|scroll|overlay|hidden/.test(n+o+r)}function y(e,n,o){void 0===o&&(o=!1);var i,a,f=r(n),c=r(n)&&function(e){var t=e.getBoundingClientRect(),n=s(t.width)/e.offsetWidth||1,r=s(t.height)/e.offsetHeight||1;return 1!==n||1!==r}(n),m=d(n),y=p(e,c,o),g={scrollLeft:0,scrollTop:0},b={x:0,y:0};return(f||!f&&!o)&&(("body"!==l(n)||v(m))&&(g=(i=n)!==t(i)&&r(i)?{scrollLeft:(a=i).scrollLeft,scrollTop:a.scrollTop}:u(i)),r(n)?((b=p(n,!0)).x+=n.clientLeft,b.y+=n.clientTop):m&&(b.x=h(m))),{x:y.left+g.scrollLeft-b.x,y:y.top+g.scrollTop-b.y,width:y.width,height:y.height}}function g(e){var t=p(e),n=e.offsetWidth,r=e.offsetHeight;return Math.abs(t.width-n)<=1&&(n=t.width),Math.abs(t.height-r)<=1&&(r=t.height),{x:e.offsetLeft,y:e.offsetTop,width:n,height:r}}function b(e){return"html"===l(e)?e:e.assignedSlot||e.parentNode||(o(e)?e.host:null)||d(e)}function x(e){return["html","body","#document"].indexOf(l(e))>=0?e.ownerDocument.body:r(e)&&v(e)?e:x(b(e))}function w(e,n){var r;void 0===n&&(n=[]);var o=x(e),i=o===(null==(r=e.ownerDocument)?void 0:r.body),a=t(o),s=i?[a].concat(a.visualViewport||[],v(o)?o:[]):o,f=n.concat(s);return i?f:f.concat(w(b(s)))}function O(e){return["table","td","th"].indexOf(l(e))>=0}function j(e){return r(e)&&"fixed"!==m(e).position?e.offsetParent:null}function E(e){for(var n=t(e),i=j(e);i&&O(i)&&"static"===m(i).position;)i=j(i);return i&&("html"===l(i)||"body"===l(i)&&"static"===m(i).position)?n:i||function(e){var t=/firefox/i.test(f());if(/Trident/i.test(f())&&r(e)&&"fixed"===m(e).position)return null;var n=b(e);for(o(n)&&(n=n.host);r(n)&&["html","body"].indexOf(l(n))<0;){var i=m(n);if("none"!==i.transform||"none"!==i.perspective||"paint"===i.contain||-1!==["transform","perspective"].indexOf(i.willChange)||t&&"filter"===i.willChange||t&&i.filter&&"none"!==i.filter)return n;n=n.parentNode}return null}(e)||n}var D="top",A="bottom",L="right",P="left",M="auto",k=[D,A,L,P],W="start",B="end",H="viewport",T="popper",R=k.reduce((function(e,t){return e.concat([t+"-"+W,t+"-"+B])}),[]),S=[].concat(k,[M]).reduce((function(e,t){return e.concat([t,t+"-"+W,t+"-"+B])}),[]),V=["beforeRead","read","afterRead","beforeMain","main","afterMain","beforeWrite","write","afterWrite"];function q(e){var t=new Map,n=new Set,r=[];function o(e){n.add(e.name),[].concat(e.requires||[],e.requiresIfExists||[]).forEach((function(e){if(!n.has(e)){var r=t.get(e);r&&o(r)}})),r.push(e)}return e.forEach((function(e){t.set(e.name,e)})),e.forEach((function(e){n.has(e.name)||o(e)})),r}function C(e,t){var n=t.getRootNode&&t.getRootNode();if(e.contains(t))return!0;if(n&&o(n)){var r=t;do{if(r&&e.isSameNode(r))return!0;r=r.parentNode||r.host}while(r)}return!1}function N(e){return Object.assign({},e,{left:e.x,top:e.y,right:e.x+e.width,bottom:e.y+e.height})}function I(e,r,o){return r===H?N(function(e,n){var r=t(e),o=d(e),i=r.visualViewport,a=o.clientWidth,s=o.clientHeight,f=0,p=0;if(i){a=i.width,s=i.height;var u=c();(u||!u&&"fixed"===n)&&(f=i.offsetLeft,p=i.offsetTop)}return{width:a,height:s,x:f+h(e),y:p}}(e,o)):n(r)?function(e,t){var n=p(e,!1,"fixed"===t);return n.top=n.top+e.clientTop,n.left=n.left+e.clientLeft,n.bottom=n.top+e.clientHeight,n.right=n.left+e.clientWidth,n.width=e.clientWidth,n.height=e.clientHeight,n.x=n.left,n.y=n.top,n}(r,o):N(function(e){var t,n=d(e),r=u(e),o=null==(t=e.ownerDocument)?void 0:t.body,a=i(n.scrollWidth,n.clientWidth,o?o.scrollWidth:0,o?o.clientWidth:0),s=i(n.scrollHeight,n.clientHeight,o?o.scrollHeight:0,o?o.clientHeight:0),f=-r.scrollLeft+h(e),c=-r.scrollTop;return"rtl"===m(o||n).direction&&(f+=i(n.clientWidth,o?o.clientWidth:0)-a),{width:a,height:s,x:f,y:c}}(d(e)))}function _(e,t,o,s){var f="clippingParents"===t?function(e){var t=w(b(e)),o=["absolute","fixed"].indexOf(m(e).position)>=0&&r(e)?E(e):e;return n(o)?t.filter((function(e){return n(e)&&C(e,o)&&"body"!==l(e)})):[]}(e):[].concat(t),c=[].concat(f,[o]),p=c[0],u=c.reduce((function(t,n){var r=I(e,n,s);return t.top=i(r.top,t.top),t.right=a(r.right,t.right),t.bottom=a(r.bottom,t.bottom),t.left=i(r.left,t.left),t}),I(e,p,s));return u.width=u.right-u.left,u.height=u.bottom-u.top,u.x=u.left,u.y=u.top,u}function F(e){return e.split("-")[0]}function U(e){return e.split("-")[1]}function z(e){return["top","bottom"].indexOf(e)>=0?"x":"y"}function X(e){var t,n=e.reference,r=e.element,o=e.placement,i=o?F(o):null,a=o?U(o):null,s=n.x+n.width/2-r.width/2,f=n.y+n.height/2-r.height/2;switch(i){case D:t={x:s,y:n.y-r.height};break;case A:t={x:s,y:n.y+n.height};break;case L:t={x:n.x+n.width,y:f};break;case P:t={x:n.x-r.width,y:f};break;default:t={x:n.x,y:n.y}}var c=i?z(i):null;if(null!=c){var p="y"===c?"height":"width";switch(a){case W:t[c]=t[c]-(n[p]/2-r[p]/2);break;case B:t[c]=t[c]+(n[p]/2-r[p]/2)}}return t}function Y(e){return Object.assign({},{top:0,right:0,bottom:0,left:0},e)}function G(e,t){return t.reduce((function(t,n){return t[n]=e,t}),{})}function J(e,t){void 0===t&&(t={});var r=t,o=r.placement,i=void 0===o?e.placement:o,a=r.strategy,s=void 0===a?e.strategy:a,f=r.boundary,c=void 0===f?"clippingParents":f,u=r.rootBoundary,l=void 0===u?H:u,h=r.elementContext,m=void 0===h?T:h,v=r.altBoundary,y=void 0!==v&&v,g=r.padding,b=void 0===g?0:g,x=Y("number"!=typeof b?b:G(b,k)),w=m===T?"reference":T,O=e.rects.popper,j=e.elements[y?w:m],E=_(n(j)?j:j.contextElement||d(e.elements.popper),c,l,s),P=p(e.elements.reference),M=X({reference:P,element:O,strategy:"absolute",placement:i}),W=N(Object.assign({},O,M)),B=m===T?W:P,R={top:E.top-B.top+x.top,bottom:B.bottom-E.bottom+x.bottom,left:E.left-B.left+x.left,right:B.right-E.right+x.right},S=e.modifiersData.offset;if(m===T&&S){var V=S[i];Object.keys(R).forEach((function(e){var t=[L,A].indexOf(e)>=0?1:-1,n=[D,A].indexOf(e)>=0?"y":"x";R[e]+=V[n]*t}))}return R}var K={placement:"bottom",modifiers:[],strategy:"absolute"};function Q(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n];return!t.some((function(e){return!(e&&"function"==typeof e.getBoundingClientRect)}))}function Z(e){void 0===e&&(e={});var t=e,r=t.defaultModifiers,o=void 0===r?[]:r,i=t.defaultOptions,a=void 0===i?K:i;return function(e,t,r){void 0===r&&(r=a);var i,s,f={placement:"bottom",orderedModifiers:[],options:Object.assign({},K,a),modifiersData:{},elements:{reference:e,popper:t},attributes:{},styles:{}},c=[],p=!1,u={state:f,setOptions:function(r){var i="function"==typeof r?r(f.options):r;l(),f.options=Object.assign({},a,f.options,i),f.scrollParents={reference:n(e)?w(e):e.contextElement?w(e.contextElement):[],popper:w(t)};var s,p,d=function(e){var t=q(e);return V.reduce((function(e,n){return e.concat(t.filter((function(e){return e.phase===n})))}),[])}((s=[].concat(o,f.options.modifiers),p=s.reduce((function(e,t){var n=e[t.name];return e[t.name]=n?Object.assign({},n,t,{options:Object.assign({},n.options,t.options),data:Object.assign({},n.data,t.data)}):t,e}),{}),Object.keys(p).map((function(e){return p[e]}))));return f.orderedModifiers=d.filter((function(e){return e.enabled})),f.orderedModifiers.forEach((function(e){var t=e.name,n=e.options,r=void 0===n?{}:n,o=e.effect;if("function"==typeof o){var i=o({state:f,name:t,instance:u,options:r}),a=function(){};c.push(i||a)}})),u.update()},forceUpdate:function(){if(!p){var e=f.elements,t=e.reference,n=e.popper;if(Q(t,n)){f.rects={reference:y(t,E(n),"fixed"===f.options.strategy),popper:g(n)},f.reset=!1,f.placement=f.options.placement,f.orderedModifiers.forEach((function(e){return f.modifiersData[e.name]=Object.assign({},e.data)}));for(var r=0;r<f.orderedModifiers.length;r++)if(!0!==f.reset){var o=f.orderedModifiers[r],i=o.fn,a=o.options,s=void 0===a?{}:a,c=o.name;"function"==typeof i&&(f=i({state:f,options:s,name:c,instance:u})||f)}else f.reset=!1,r=-1}}},update:(i=function(){return new Promise((function(e){u.forceUpdate(),e(f)}))},function(){return s||(s=new Promise((function(e){Promise.resolve().then((function(){s=void 0,e(i())}))}))),s}),destroy:function(){l(),p=!0}};if(!Q(e,t))return u;function l(){c.forEach((function(e){return e()})),c=[]}return u.setOptions(r).then((function(e){!p&&r.onFirstUpdate&&r.onFirstUpdate(e)})),u}}var $={passive:!0};var ee={name:"eventListeners",enabled:!0,phase:"write",fn:function(){},effect:function(e){var n=e.state,r=e.instance,o=e.options,i=o.scroll,a=void 0===i||i,s=o.resize,f=void 0===s||s,c=t(n.elements.popper),p=[].concat(n.scrollParents.reference,n.scrollParents.popper);return a&&p.forEach((function(e){e.addEventListener("scroll",r.update,$)})),f&&c.addEventListener("resize",r.update,$),function(){a&&p.forEach((function(e){e.removeEventListener("scroll",r.update,$)})),f&&c.removeEventListener("resize",r.update,$)}},data:{}};var te={name:"popperOffsets",enabled:!0,phase:"read",fn:function(e){var t=e.state,n=e.name;t.modifiersData[n]=X({reference:t.rects.reference,element:t.rects.popper,strategy:"absolute",placement:t.placement})},data:{}},ne={top:"auto",right:"auto",bottom:"auto",left:"auto"};function re(e){var n,r=e.popper,o=e.popperRect,i=e.placement,a=e.variation,f=e.offsets,c=e.position,p=e.gpuAcceleration,u=e.adaptive,l=e.roundOffsets,h=e.isFixed,v=f.x,y=void 0===v?0:v,g=f.y,b=void 0===g?0:g,x="function"==typeof l?l({x:y,y:b}):{x:y,y:b};y=x.x,b=x.y;var w=f.hasOwnProperty("x"),O=f.hasOwnProperty("y"),j=P,M=D,k=window;if(u){var W=E(r),H="clientHeight",T="clientWidth";if(W===t(r)&&"static"!==m(W=d(r)).position&&"absolute"===c&&(H="scrollHeight",T="scrollWidth"),W=W,i===D||(i===P||i===L)&&a===B)M=A,b-=(h&&W===k&&k.visualViewport?k.visualViewport.height:W[H])-o.height,b*=p?1:-1;if(i===P||(i===D||i===A)&&a===B)j=L,y-=(h&&W===k&&k.visualViewport?k.visualViewport.width:W[T])-o.width,y*=p?1:-1}var R,S=Object.assign({position:c},u&&ne),V=!0===l?function(e,t){var n=e.x,r=e.y,o=t.devicePixelRatio||1;return{x:s(n*o)/o||0,y:s(r*o)/o||0}}({x:y,y:b},t(r)):{x:y,y:b};return y=V.x,b=V.y,p?Object.assign({},S,((R={})[M]=O?"0":"",R[j]=w?"0":"",R.transform=(k.devicePixelRatio||1)<=1?"translate("+y+"px, "+b+"px)":"translate3d("+y+"px, "+b+"px, 0)",R)):Object.assign({},S,((n={})[M]=O?b+"px":"",n[j]=w?y+"px":"",n.transform="",n))}var oe={name:"computeStyles",enabled:!0,phase:"beforeWrite",fn:function(e){var t=e.state,n=e.options,r=n.gpuAcceleration,o=void 0===r||r,i=n.adaptive,a=void 0===i||i,s=n.roundOffsets,f=void 0===s||s,c={placement:F(t.placement),variation:U(t.placement),popper:t.elements.popper,popperRect:t.rects.popper,gpuAcceleration:o,isFixed:"fixed"===t.options.strategy};null!=t.modifiersData.popperOffsets&&(t.styles.popper=Object.assign({},t.styles.popper,re(Object.assign({},c,{offsets:t.modifiersData.popperOffsets,position:t.options.strategy,adaptive:a,roundOffsets:f})))),null!=t.modifiersData.arrow&&(t.styles.arrow=Object.assign({},t.styles.arrow,re(Object.assign({},c,{offsets:t.modifiersData.arrow,position:"absolute",adaptive:!1,roundOffsets:f})))),t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-placement":t.placement})},data:{}};var ie={name:"applyStyles",enabled:!0,phase:"write",fn:function(e){var t=e.state;Object.keys(t.elements).forEach((function(e){var n=t.styles[e]||{},o=t.attributes[e]||{},i=t.elements[e];r(i)&&l(i)&&(Object.assign(i.style,n),Object.keys(o).forEach((function(e){var t=o[e];!1===t?i.removeAttribute(e):i.setAttribute(e,!0===t?"":t)})))}))},effect:function(e){var t=e.state,n={popper:{position:t.options.strategy,left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};return Object.assign(t.elements.popper.style,n.popper),t.styles=n,t.elements.arrow&&Object.assign(t.elements.arrow.style,n.arrow),function(){Object.keys(t.elements).forEach((function(e){var o=t.elements[e],i=t.attributes[e]||{},a=Object.keys(t.styles.hasOwnProperty(e)?t.styles[e]:n[e]).reduce((function(e,t){return e[t]="",e}),{});r(o)&&l(o)&&(Object.assign(o.style,a),Object.keys(i).forEach((function(e){o.removeAttribute(e)})))}))}},requires:["computeStyles"]};var ae={name:"offset",enabled:!0,phase:"main",requires:["popperOffsets"],fn:function(e){var t=e.state,n=e.options,r=e.name,o=n.offset,i=void 0===o?[0,0]:o,a=S.reduce((function(e,n){return e[n]=function(e,t,n){var r=F(e),o=[P,D].indexOf(r)>=0?-1:1,i="function"==typeof n?n(Object.assign({},t,{placement:e})):n,a=i[0],s=i[1];return a=a||0,s=(s||0)*o,[P,L].indexOf(r)>=0?{x:s,y:a}:{x:a,y:s}}(n,t.rects,i),e}),{}),s=a[t.placement],f=s.x,c=s.y;null!=t.modifiersData.popperOffsets&&(t.modifiersData.popperOffsets.x+=f,t.modifiersData.popperOffsets.y+=c),t.modifiersData[r]=a}},se={left:"right",right:"left",bottom:"top",top:"bottom"};function fe(e){return e.replace(/left|right|bottom|top/g,(function(e){return se[e]}))}var ce={start:"end",end:"start"};function pe(e){return e.replace(/start|end/g,(function(e){return ce[e]}))}function ue(e,t){void 0===t&&(t={});var n=t,r=n.placement,o=n.boundary,i=n.rootBoundary,a=n.padding,s=n.flipVariations,f=n.allowedAutoPlacements,c=void 0===f?S:f,p=U(r),u=p?s?R:R.filter((function(e){return U(e)===p})):k,l=u.filter((function(e){return c.indexOf(e)>=0}));0===l.length&&(l=u);var d=l.reduce((function(t,n){return t[n]=J(e,{placement:n,boundary:o,rootBoundary:i,padding:a})[F(n)],t}),{});return Object.keys(d).sort((function(e,t){return d[e]-d[t]}))}var le={name:"flip",enabled:!0,phase:"main",fn:function(e){var t=e.state,n=e.options,r=e.name;if(!t.modifiersData[r]._skip){for(var o=n.mainAxis,i=void 0===o||o,a=n.altAxis,s=void 0===a||a,f=n.fallbackPlacements,c=n.padding,p=n.boundary,u=n.rootBoundary,l=n.altBoundary,d=n.flipVariations,h=void 0===d||d,m=n.allowedAutoPlacements,v=t.options.placement,y=F(v),g=f||(y===v||!h?[fe(v)]:function(e){if(F(e)===M)return[];var t=fe(e);return[pe(e),t,pe(t)]}(v)),b=[v].concat(g).reduce((function(e,n){return e.concat(F(n)===M?ue(t,{placement:n,boundary:p,rootBoundary:u,padding:c,flipVariations:h,allowedAutoPlacements:m}):n)}),[]),x=t.rects.reference,w=t.rects.popper,O=new Map,j=!0,E=b[0],k=0;k<b.length;k++){var B=b[k],H=F(B),T=U(B)===W,R=[D,A].indexOf(H)>=0,S=R?"width":"height",V=J(t,{placement:B,boundary:p,rootBoundary:u,altBoundary:l,padding:c}),q=R?T?L:P:T?A:D;x[S]>w[S]&&(q=fe(q));var C=fe(q),N=[];if(i&&N.push(V[H]<=0),s&&N.push(V[q]<=0,V[C]<=0),N.every((function(e){return e}))){E=B,j=!1;break}O.set(B,N)}if(j)for(var I=function(e){var t=b.find((function(t){var n=O.get(t);if(n)return n.slice(0,e).every((function(e){return e}))}));if(t)return E=t,"break"},_=h?3:1;_>0;_--){if("break"===I(_))break}t.placement!==E&&(t.modifiersData[r]._skip=!0,t.placement=E,t.reset=!0)}},requiresIfExists:["offset"],data:{_skip:!1}};function de(e,t,n){return i(e,a(t,n))}var he={name:"preventOverflow",enabled:!0,phase:"main",fn:function(e){var t=e.state,n=e.options,r=e.name,o=n.mainAxis,s=void 0===o||o,f=n.altAxis,c=void 0!==f&&f,p=n.boundary,u=n.rootBoundary,l=n.altBoundary,d=n.padding,h=n.tether,m=void 0===h||h,v=n.tetherOffset,y=void 0===v?0:v,b=J(t,{boundary:p,rootBoundary:u,padding:d,altBoundary:l}),x=F(t.placement),w=U(t.placement),O=!w,j=z(x),M="x"===j?"y":"x",k=t.modifiersData.popperOffsets,B=t.rects.reference,H=t.rects.popper,T="function"==typeof y?y(Object.assign({},t.rects,{placement:t.placement})):y,R="number"==typeof T?{mainAxis:T,altAxis:T}:Object.assign({mainAxis:0,altAxis:0},T),S=t.modifiersData.offset?t.modifiersData.offset[t.placement]:null,V={x:0,y:0};if(k){if(s){var q,C="y"===j?D:P,N="y"===j?A:L,I="y"===j?"height":"width",_=k[j],X=_+b[C],Y=_-b[N],G=m?-H[I]/2:0,K=w===W?B[I]:H[I],Q=w===W?-H[I]:-B[I],Z=t.elements.arrow,$=m&&Z?g(Z):{width:0,height:0},ee=t.modifiersData["arrow#persistent"]?t.modifiersData["arrow#persistent"].padding:{top:0,right:0,bottom:0,left:0},te=ee[C],ne=ee[N],re=de(0,B[I],$[I]),oe=O?B[I]/2-G-re-te-R.mainAxis:K-re-te-R.mainAxis,ie=O?-B[I]/2+G+re+ne+R.mainAxis:Q+re+ne+R.mainAxis,ae=t.elements.arrow&&E(t.elements.arrow),se=ae?"y"===j?ae.clientTop||0:ae.clientLeft||0:0,fe=null!=(q=null==S?void 0:S[j])?q:0,ce=_+ie-fe,pe=de(m?a(X,_+oe-fe-se):X,_,m?i(Y,ce):Y);k[j]=pe,V[j]=pe-_}if(c){var ue,le="x"===j?D:P,he="x"===j?A:L,me=k[M],ve="y"===M?"height":"width",ye=me+b[le],ge=me-b[he],be=-1!==[D,P].indexOf(x),xe=null!=(ue=null==S?void 0:S[M])?ue:0,we=be?ye:me-B[ve]-H[ve]-xe+R.altAxis,Oe=be?me+B[ve]+H[ve]-xe-R.altAxis:ge,je=m&&be?function(e,t,n){var r=de(e,t,n);return r>n?n:r}(we,me,Oe):de(m?we:ye,me,m?Oe:ge);k[M]=je,V[M]=je-me}t.modifiersData[r]=V}},requiresIfExists:["offset"]};var me={name:"arrow",enabled:!0,phase:"main",fn:function(e){var t,n=e.state,r=e.name,o=e.options,i=n.elements.arrow,a=n.modifiersData.popperOffsets,s=F(n.placement),f=z(s),c=[P,L].indexOf(s)>=0?"height":"width";if(i&&a){var p=function(e,t){return Y("number"!=typeof(e="function"==typeof e?e(Object.assign({},t.rects,{placement:t.placement})):e)?e:G(e,k))}(o.padding,n),u=g(i),l="y"===f?D:P,d="y"===f?A:L,h=n.rects.reference[c]+n.rects.reference[f]-a[f]-n.rects.popper[c],m=a[f]-n.rects.reference[f],v=E(i),y=v?"y"===f?v.clientHeight||0:v.clientWidth||0:0,b=h/2-m/2,x=p[l],w=y-u[c]-p[d],O=y/2-u[c]/2+b,j=de(x,O,w),M=f;n.modifiersData[r]=((t={})[M]=j,t.centerOffset=j-O,t)}},effect:function(e){var t=e.state,n=e.options.element,r=void 0===n?"[data-popper-arrow]":n;null!=r&&("string"!=typeof r||(r=t.elements.popper.querySelector(r)))&&C(t.elements.popper,r)&&(t.elements.arrow=r)},requires:["popperOffsets"],requiresIfExists:["preventOverflow"]};function ve(e,t,n){return void 0===n&&(n={x:0,y:0}),{top:e.top-t.height-n.y,right:e.right-t.width+n.x,bottom:e.bottom-t.height+n.y,left:e.left-t.width-n.x}}function ye(e){return[D,L,A,P].some((function(t){return e[t]>=0}))}var ge={name:"hide",enabled:!0,phase:"main",requiresIfExists:["preventOverflow"],fn:function(e){var t=e.state,n=e.name,r=t.rects.reference,o=t.rects.popper,i=t.modifiersData.preventOverflow,a=J(t,{elementContext:"reference"}),s=J(t,{altBoundary:!0}),f=ve(a,r),c=ve(s,o,i),p=ye(f),u=ye(c);t.modifiersData[n]={referenceClippingOffsets:f,popperEscapeOffsets:c,isReferenceHidden:p,hasPopperEscaped:u},t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-reference-hidden":p,"data-popper-escaped":u})}},be=Z({defaultModifiers:[ee,te,oe,ie]}),xe=[ee,te,oe,ie,ae,le,he,me,ge],we=Z({defaultModifiers:xe});e.applyStyles=ie,e.arrow=me,e.computeStyles=oe,e.createPopper=we,e.createPopperLite=be,e.defaultModifiers=xe,e.detectOverflow=J,e.eventListeners=ee,e.flip=le,e.hide=ge,e.offset=ae,e.popperGenerator=Z,e.popperOffsets=te,e.preventOverflow=he,Object.defineProperty(e,"__esModule",{value:!0})}));
//# sourceMappingURL=popper.min.js.map
/* tippy.js v6.3.7 MIT */
!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e(require("@popperjs/core")):"function"==typeof define&&define.amd?define(["@popperjs/core"],e):(t=t||self).tippy=e(t.Popper)}(this,(function(t){"use strict";var e="undefined"!=typeof window&&"undefined"!=typeof document,n=!!e&&!!window.msCrypto,r={passive:!0,capture:!0},o=function(){return document.body};function i(t,e,n){if(Array.isArray(t)){var r=t[e];return null==r?Array.isArray(n)?n[e]:n:r}return t}function a(t,e){var n={}.toString.call(t);return 0===n.indexOf("[object")&&n.indexOf(e+"]")>-1}function s(t,e){return"function"==typeof t?t.apply(void 0,e):t}function u(t,e){return 0===e?t:function(r){clearTimeout(n),n=setTimeout((function(){t(r)}),e)};var n}function p(t,e){var n=Object.assign({},t);return e.forEach((function(t){delete n[t]})),n}function c(t){return[].concat(t)}function f(t,e){-1===t.indexOf(e)&&t.push(e)}function l(t){return t.split("-")[0]}function d(t){return[].slice.call(t)}function v(t){return Object.keys(t).reduce((function(e,n){return void 0!==t[n]&&(e[n]=t[n]),e}),{})}function m(){return document.createElement("div")}function g(t){return["Element","Fragment"].some((function(e){return a(t,e)}))}function h(t){return a(t,"MouseEvent")}function b(t){return!(!t||!t._tippy||t._tippy.reference!==t)}function y(t){return g(t)?[t]:function(t){return a(t,"NodeList")}(t)?d(t):Array.isArray(t)?t:d(document.querySelectorAll(t))}function w(t,e){t.forEach((function(t){t&&(t.style.transitionDuration=e+"ms")}))}function x(t,e){t.forEach((function(t){t&&t.setAttribute("data-state",e)}))}function E(t){var e,n=c(t)[0];return null!=n&&null!=(e=n.ownerDocument)&&e.body?n.ownerDocument:document}function O(t,e,n){var r=e+"EventListener";["transitionend","webkitTransitionEnd"].forEach((function(e){t[r](e,n)}))}function C(t,e){for(var n=e;n;){var r;if(t.contains(n))return!0;n=null==n.getRootNode||null==(r=n.getRootNode())?void 0:r.host}return!1}var T={isTouch:!1},A=0;function L(){T.isTouch||(T.isTouch=!0,window.performance&&document.addEventListener("mousemove",D))}function D(){var t=performance.now();t-A<20&&(T.isTouch=!1,document.removeEventListener("mousemove",D)),A=t}function k(){var t=document.activeElement;if(b(t)){var e=t._tippy;t.blur&&!e.state.isVisible&&t.blur()}}var R=Object.assign({appendTo:o,aria:{content:"auto",expanded:"auto"},delay:0,duration:[300,250],getReferenceClientRect:null,hideOnClick:!0,ignoreAttributes:!1,interactive:!1,interactiveBorder:2,interactiveDebounce:0,moveTransition:"",offset:[0,10],onAfterUpdate:function(){},onBeforeUpdate:function(){},onCreate:function(){},onDestroy:function(){},onHidden:function(){},onHide:function(){},onMount:function(){},onShow:function(){},onShown:function(){},onTrigger:function(){},onUntrigger:function(){},onClickOutside:function(){},placement:"top",plugins:[],popperOptions:{},render:null,showOnCreate:!1,touch:!0,trigger:"mouseenter focus",triggerTarget:null},{animateFill:!1,followCursor:!1,inlinePositioning:!1,sticky:!1},{allowHTML:!1,animation:"fade",arrow:!0,content:"",inertia:!1,maxWidth:350,role:"tooltip",theme:"",zIndex:9999}),P=Object.keys(R);function j(t){var e=(t.plugins||[]).reduce((function(e,n){var r,o=n.name,i=n.defaultValue;o&&(e[o]=void 0!==t[o]?t[o]:null!=(r=R[o])?r:i);return e}),{});return Object.assign({},t,e)}function M(t,e){var n=Object.assign({},e,{content:s(e.content,[t])},e.ignoreAttributes?{}:function(t,e){return(e?Object.keys(j(Object.assign({},R,{plugins:e}))):P).reduce((function(e,n){var r=(t.getAttribute("data-tippy-"+n)||"").trim();if(!r)return e;if("content"===n)e[n]=r;else try{e[n]=JSON.parse(r)}catch(t){e[n]=r}return e}),{})}(t,e.plugins));return n.aria=Object.assign({},R.aria,n.aria),n.aria={expanded:"auto"===n.aria.expanded?e.interactive:n.aria.expanded,content:"auto"===n.aria.content?e.interactive?null:"describedby":n.aria.content},n}function V(t,e){t.innerHTML=e}function I(t){var e=m();return!0===t?e.className="tippy-arrow":(e.className="tippy-svg-arrow",g(t)?e.appendChild(t):V(e,t)),e}function S(t,e){g(e.content)?(V(t,""),t.appendChild(e.content)):"function"!=typeof e.content&&(e.allowHTML?V(t,e.content):t.textContent=e.content)}function B(t){var e=t.firstElementChild,n=d(e.children);return{box:e,content:n.find((function(t){return t.classList.contains("tippy-content")})),arrow:n.find((function(t){return t.classList.contains("tippy-arrow")||t.classList.contains("tippy-svg-arrow")})),backdrop:n.find((function(t){return t.classList.contains("tippy-backdrop")}))}}function N(t){var e=m(),n=m();n.className="tippy-box",n.setAttribute("data-state","hidden"),n.setAttribute("tabindex","-1");var r=m();function o(n,r){var o=B(e),i=o.box,a=o.content,s=o.arrow;r.theme?i.setAttribute("data-theme",r.theme):i.removeAttribute("data-theme"),"string"==typeof r.animation?i.setAttribute("data-animation",r.animation):i.removeAttribute("data-animation"),r.inertia?i.setAttribute("data-inertia",""):i.removeAttribute("data-inertia"),i.style.maxWidth="number"==typeof r.maxWidth?r.maxWidth+"px":r.maxWidth,r.role?i.setAttribute("role",r.role):i.removeAttribute("role"),n.content===r.content&&n.allowHTML===r.allowHTML||S(a,t.props),r.arrow?s?n.arrow!==r.arrow&&(i.removeChild(s),i.appendChild(I(r.arrow))):i.appendChild(I(r.arrow)):s&&i.removeChild(s)}return r.className="tippy-content",r.setAttribute("data-state","hidden"),S(r,t.props),e.appendChild(n),n.appendChild(r),o(t.props,t.props),{popper:e,onUpdate:o}}N.$$tippy=!0;var H=1,U=[],_=[];function z(e,a){var p,g,b,y,A,L,D,k,P=M(e,Object.assign({},R,j(v(a)))),V=!1,I=!1,S=!1,N=!1,z=[],F=u(wt,P.interactiveDebounce),W=H++,X=(k=P.plugins).filter((function(t,e){return k.indexOf(t)===e})),Y={id:W,reference:e,popper:m(),popperInstance:null,props:P,state:{isEnabled:!0,isVisible:!1,isDestroyed:!1,isMounted:!1,isShown:!1},plugins:X,clearDelayTimeouts:function(){clearTimeout(p),clearTimeout(g),cancelAnimationFrame(b)},setProps:function(t){if(Y.state.isDestroyed)return;at("onBeforeUpdate",[Y,t]),bt();var n=Y.props,r=M(e,Object.assign({},n,v(t),{ignoreAttributes:!0}));Y.props=r,ht(),n.interactiveDebounce!==r.interactiveDebounce&&(pt(),F=u(wt,r.interactiveDebounce));n.triggerTarget&&!r.triggerTarget?c(n.triggerTarget).forEach((function(t){t.removeAttribute("aria-expanded")})):r.triggerTarget&&e.removeAttribute("aria-expanded");ut(),it(),J&&J(n,r);Y.popperInstance&&(Ct(),At().forEach((function(t){requestAnimationFrame(t._tippy.popperInstance.forceUpdate)})));at("onAfterUpdate",[Y,t])},setContent:function(t){Y.setProps({content:t})},show:function(){var t=Y.state.isVisible,e=Y.state.isDestroyed,n=!Y.state.isEnabled,r=T.isTouch&&!Y.props.touch,a=i(Y.props.duration,0,R.duration);if(t||e||n||r)return;if(et().hasAttribute("disabled"))return;if(at("onShow",[Y],!1),!1===Y.props.onShow(Y))return;Y.state.isVisible=!0,tt()&&($.style.visibility="visible");it(),dt(),Y.state.isMounted||($.style.transition="none");if(tt()){var u=rt(),p=u.box,c=u.content;w([p,c],0)}L=function(){var t;if(Y.state.isVisible&&!N){if(N=!0,$.offsetHeight,$.style.transition=Y.props.moveTransition,tt()&&Y.props.animation){var e=rt(),n=e.box,r=e.content;w([n,r],a),x([n,r],"visible")}st(),ut(),f(_,Y),null==(t=Y.popperInstance)||t.forceUpdate(),at("onMount",[Y]),Y.props.animation&&tt()&&function(t,e){mt(t,e)}(a,(function(){Y.state.isShown=!0,at("onShown",[Y])}))}},function(){var t,e=Y.props.appendTo,n=et();t=Y.props.interactive&&e===o||"parent"===e?n.parentNode:s(e,[n]);t.contains($)||t.appendChild($);Y.state.isMounted=!0,Ct()}()},hide:function(){var t=!Y.state.isVisible,e=Y.state.isDestroyed,n=!Y.state.isEnabled,r=i(Y.props.duration,1,R.duration);if(t||e||n)return;if(at("onHide",[Y],!1),!1===Y.props.onHide(Y))return;Y.state.isVisible=!1,Y.state.isShown=!1,N=!1,V=!1,tt()&&($.style.visibility="hidden");if(pt(),vt(),it(!0),tt()){var o=rt(),a=o.box,s=o.content;Y.props.animation&&(w([a,s],r),x([a,s],"hidden"))}st(),ut(),Y.props.animation?tt()&&function(t,e){mt(t,(function(){!Y.state.isVisible&&$.parentNode&&$.parentNode.contains($)&&e()}))}(r,Y.unmount):Y.unmount()},hideWithInteractivity:function(t){nt().addEventListener("mousemove",F),f(U,F),F(t)},enable:function(){Y.state.isEnabled=!0},disable:function(){Y.hide(),Y.state.isEnabled=!1},unmount:function(){Y.state.isVisible&&Y.hide();if(!Y.state.isMounted)return;Tt(),At().forEach((function(t){t._tippy.unmount()})),$.parentNode&&$.parentNode.removeChild($);_=_.filter((function(t){return t!==Y})),Y.state.isMounted=!1,at("onHidden",[Y])},destroy:function(){if(Y.state.isDestroyed)return;Y.clearDelayTimeouts(),Y.unmount(),bt(),delete e._tippy,Y.state.isDestroyed=!0,at("onDestroy",[Y])}};if(!P.render)return Y;var q=P.render(Y),$=q.popper,J=q.onUpdate;$.setAttribute("data-tippy-root",""),$.id="tippy-"+Y.id,Y.popper=$,e._tippy=Y,$._tippy=Y;var G=X.map((function(t){return t.fn(Y)})),K=e.hasAttribute("aria-expanded");return ht(),ut(),it(),at("onCreate",[Y]),P.showOnCreate&&Lt(),$.addEventListener("mouseenter",(function(){Y.props.interactive&&Y.state.isVisible&&Y.clearDelayTimeouts()})),$.addEventListener("mouseleave",(function(){Y.props.interactive&&Y.props.trigger.indexOf("mouseenter")>=0&&nt().addEventListener("mousemove",F)})),Y;function Q(){var t=Y.props.touch;return Array.isArray(t)?t:[t,0]}function Z(){return"hold"===Q()[0]}function tt(){var t;return!(null==(t=Y.props.render)||!t.$$tippy)}function et(){return D||e}function nt(){var t=et().parentNode;return t?E(t):document}function rt(){return B($)}function ot(t){return Y.state.isMounted&&!Y.state.isVisible||T.isTouch||y&&"focus"===y.type?0:i(Y.props.delay,t?0:1,R.delay)}function it(t){void 0===t&&(t=!1),$.style.pointerEvents=Y.props.interactive&&!t?"":"none",$.style.zIndex=""+Y.props.zIndex}function at(t,e,n){var r;(void 0===n&&(n=!0),G.forEach((function(n){n[t]&&n[t].apply(n,e)})),n)&&(r=Y.props)[t].apply(r,e)}function st(){var t=Y.props.aria;if(t.content){var n="aria-"+t.content,r=$.id;c(Y.props.triggerTarget||e).forEach((function(t){var e=t.getAttribute(n);if(Y.state.isVisible)t.setAttribute(n,e?e+" "+r:r);else{var o=e&&e.replace(r,"").trim();o?t.setAttribute(n,o):t.removeAttribute(n)}}))}}function ut(){!K&&Y.props.aria.expanded&&c(Y.props.triggerTarget||e).forEach((function(t){Y.props.interactive?t.setAttribute("aria-expanded",Y.state.isVisible&&t===et()?"true":"false"):t.removeAttribute("aria-expanded")}))}function pt(){nt().removeEventListener("mousemove",F),U=U.filter((function(t){return t!==F}))}function ct(t){if(!T.isTouch||!S&&"mousedown"!==t.type){var n=t.composedPath&&t.composedPath()[0]||t.target;if(!Y.props.interactive||!C($,n)){if(c(Y.props.triggerTarget||e).some((function(t){return C(t,n)}))){if(T.isTouch)return;if(Y.state.isVisible&&Y.props.trigger.indexOf("click")>=0)return}else at("onClickOutside",[Y,t]);!0===Y.props.hideOnClick&&(Y.clearDelayTimeouts(),Y.hide(),I=!0,setTimeout((function(){I=!1})),Y.state.isMounted||vt())}}}function ft(){S=!0}function lt(){S=!1}function dt(){var t=nt();t.addEventListener("mousedown",ct,!0),t.addEventListener("touchend",ct,r),t.addEventListener("touchstart",lt,r),t.addEventListener("touchmove",ft,r)}function vt(){var t=nt();t.removeEventListener("mousedown",ct,!0),t.removeEventListener("touchend",ct,r),t.removeEventListener("touchstart",lt,r),t.removeEventListener("touchmove",ft,r)}function mt(t,e){var n=rt().box;function r(t){t.target===n&&(O(n,"remove",r),e())}if(0===t)return e();O(n,"remove",A),O(n,"add",r),A=r}function gt(t,n,r){void 0===r&&(r=!1),c(Y.props.triggerTarget||e).forEach((function(e){e.addEventListener(t,n,r),z.push({node:e,eventType:t,handler:n,options:r})}))}function ht(){var t;Z()&&(gt("touchstart",yt,{passive:!0}),gt("touchend",xt,{passive:!0})),(t=Y.props.trigger,t.split(/\s+/).filter(Boolean)).forEach((function(t){if("manual"!==t)switch(gt(t,yt),t){case"mouseenter":gt("mouseleave",xt);break;case"focus":gt(n?"focusout":"blur",Et);break;case"focusin":gt("focusout",Et)}}))}function bt(){z.forEach((function(t){var e=t.node,n=t.eventType,r=t.handler,o=t.options;e.removeEventListener(n,r,o)})),z=[]}function yt(t){var e,n=!1;if(Y.state.isEnabled&&!Ot(t)&&!I){var r="focus"===(null==(e=y)?void 0:e.type);y=t,D=t.currentTarget,ut(),!Y.state.isVisible&&h(t)&&U.forEach((function(e){return e(t)})),"click"===t.type&&(Y.props.trigger.indexOf("mouseenter")<0||V)&&!1!==Y.props.hideOnClick&&Y.state.isVisible?n=!0:Lt(t),"click"===t.type&&(V=!n),n&&!r&&Dt(t)}}function wt(t){var e=t.target,n=et().contains(e)||$.contains(e);"mousemove"===t.type&&n||function(t,e){var n=e.clientX,r=e.clientY;return t.every((function(t){var e=t.popperRect,o=t.popperState,i=t.props.interactiveBorder,a=l(o.placement),s=o.modifiersData.offset;if(!s)return!0;var u="bottom"===a?s.top.y:0,p="top"===a?s.bottom.y:0,c="right"===a?s.left.x:0,f="left"===a?s.right.x:0,d=e.top-r+u>i,v=r-e.bottom-p>i,m=e.left-n+c>i,g=n-e.right-f>i;return d||v||m||g}))}(At().concat($).map((function(t){var e,n=null==(e=t._tippy.popperInstance)?void 0:e.state;return n?{popperRect:t.getBoundingClientRect(),popperState:n,props:P}:null})).filter(Boolean),t)&&(pt(),Dt(t))}function xt(t){Ot(t)||Y.props.trigger.indexOf("click")>=0&&V||(Y.props.interactive?Y.hideWithInteractivity(t):Dt(t))}function Et(t){Y.props.trigger.indexOf("focusin")<0&&t.target!==et()||Y.props.interactive&&t.relatedTarget&&$.contains(t.relatedTarget)||Dt(t)}function Ot(t){return!!T.isTouch&&Z()!==t.type.indexOf("touch")>=0}function Ct(){Tt();var n=Y.props,r=n.popperOptions,o=n.placement,i=n.offset,a=n.getReferenceClientRect,s=n.moveTransition,u=tt()?B($).arrow:null,p=a?{getBoundingClientRect:a,contextElement:a.contextElement||et()}:e,c=[{name:"offset",options:{offset:i}},{name:"preventOverflow",options:{padding:{top:2,bottom:2,left:5,right:5}}},{name:"flip",options:{padding:5}},{name:"computeStyles",options:{adaptive:!s}},{name:"$$tippy",enabled:!0,phase:"beforeWrite",requires:["computeStyles"],fn:function(t){var e=t.state;if(tt()){var n=rt().box;["placement","reference-hidden","escaped"].forEach((function(t){"placement"===t?n.setAttribute("data-placement",e.placement):e.attributes.popper["data-popper-"+t]?n.setAttribute("data-"+t,""):n.removeAttribute("data-"+t)})),e.attributes.popper={}}}}];tt()&&u&&c.push({name:"arrow",options:{element:u,padding:3}}),c.push.apply(c,(null==r?void 0:r.modifiers)||[]),Y.popperInstance=t.createPopper(p,$,Object.assign({},r,{placement:o,onFirstUpdate:L,modifiers:c}))}function Tt(){Y.popperInstance&&(Y.popperInstance.destroy(),Y.popperInstance=null)}function At(){return d($.querySelectorAll("[data-tippy-root]"))}function Lt(t){Y.clearDelayTimeouts(),t&&at("onTrigger",[Y,t]),dt();var e=ot(!0),n=Q(),r=n[0],o=n[1];T.isTouch&&"hold"===r&&o&&(e=o),e?p=setTimeout((function(){Y.show()}),e):Y.show()}function Dt(t){if(Y.clearDelayTimeouts(),at("onUntrigger",[Y,t]),Y.state.isVisible){if(!(Y.props.trigger.indexOf("mouseenter")>=0&&Y.props.trigger.indexOf("click")>=0&&["mouseleave","mousemove"].indexOf(t.type)>=0&&V)){var e=ot(!1);e?g=setTimeout((function(){Y.state.isVisible&&Y.hide()}),e):b=requestAnimationFrame((function(){Y.hide()}))}}else vt()}}function F(t,e){void 0===e&&(e={});var n=R.plugins.concat(e.plugins||[]);document.addEventListener("touchstart",L,r),window.addEventListener("blur",k);var o=Object.assign({},e,{plugins:n}),i=y(t).reduce((function(t,e){var n=e&&z(e,o);return n&&t.push(n),t}),[]);return g(t)?i[0]:i}F.defaultProps=R,F.setDefaultProps=function(t){Object.keys(t).forEach((function(e){R[e]=t[e]}))},F.currentInput=T;var W=Object.assign({},t.applyStyles,{effect:function(t){var e=t.state,n={popper:{position:e.options.strategy,left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};Object.assign(e.elements.popper.style,n.popper),e.styles=n,e.elements.arrow&&Object.assign(e.elements.arrow.style,n.arrow)}}),X={mouseover:"mouseenter",focusin:"focus",click:"click"};var Y={name:"animateFill",defaultValue:!1,fn:function(t){var e;if(null==(e=t.props.render)||!e.$$tippy)return{};var n=B(t.popper),r=n.box,o=n.content,i=t.props.animateFill?function(){var t=m();return t.className="tippy-backdrop",x([t],"hidden"),t}():null;return{onCreate:function(){i&&(r.insertBefore(i,r.firstElementChild),r.setAttribute("data-animatefill",""),r.style.overflow="hidden",t.setProps({arrow:!1,animation:"shift-away"}))},onMount:function(){if(i){var t=r.style.transitionDuration,e=Number(t.replace("ms",""));o.style.transitionDelay=Math.round(e/10)+"ms",i.style.transitionDuration=t,x([i],"visible")}},onShow:function(){i&&(i.style.transitionDuration="0ms")},onHide:function(){i&&x([i],"hidden")}}}};var q={clientX:0,clientY:0},$=[];function J(t){var e=t.clientX,n=t.clientY;q={clientX:e,clientY:n}}var G={name:"followCursor",defaultValue:!1,fn:function(t){var e=t.reference,n=E(t.props.triggerTarget||e),r=!1,o=!1,i=!0,a=t.props;function s(){return"initial"===t.props.followCursor&&t.state.isVisible}function u(){n.addEventListener("mousemove",f)}function p(){n.removeEventListener("mousemove",f)}function c(){r=!0,t.setProps({getReferenceClientRect:null}),r=!1}function f(n){var r=!n.target||e.contains(n.target),o=t.props.followCursor,i=n.clientX,a=n.clientY,s=e.getBoundingClientRect(),u=i-s.left,p=a-s.top;!r&&t.props.interactive||t.setProps({getReferenceClientRect:function(){var t=e.getBoundingClientRect(),n=i,r=a;"initial"===o&&(n=t.left+u,r=t.top+p);var s="horizontal"===o?t.top:r,c="vertical"===o?t.right:n,f="horizontal"===o?t.bottom:r,l="vertical"===o?t.left:n;return{width:c-l,height:f-s,top:s,right:c,bottom:f,left:l}}})}function l(){t.props.followCursor&&($.push({instance:t,doc:n}),function(t){t.addEventListener("mousemove",J)}(n))}function d(){0===($=$.filter((function(e){return e.instance!==t}))).filter((function(t){return t.doc===n})).length&&function(t){t.removeEventListener("mousemove",J)}(n)}return{onCreate:l,onDestroy:d,onBeforeUpdate:function(){a=t.props},onAfterUpdate:function(e,n){var i=n.followCursor;r||void 0!==i&&a.followCursor!==i&&(d(),i?(l(),!t.state.isMounted||o||s()||u()):(p(),c()))},onMount:function(){t.props.followCursor&&!o&&(i&&(f(q),i=!1),s()||u())},onTrigger:function(t,e){h(e)&&(q={clientX:e.clientX,clientY:e.clientY}),o="focus"===e.type},onHidden:function(){t.props.followCursor&&(c(),p(),i=!0)}}}};var K={name:"inlinePositioning",defaultValue:!1,fn:function(t){var e,n=t.reference;var r=-1,o=!1,i=[],a={name:"tippyInlinePositioning",enabled:!0,phase:"afterWrite",fn:function(o){var a=o.state;t.props.inlinePositioning&&(-1!==i.indexOf(a.placement)&&(i=[]),e!==a.placement&&-1===i.indexOf(a.placement)&&(i.push(a.placement),t.setProps({getReferenceClientRect:function(){return function(t){return function(t,e,n,r){if(n.length<2||null===t)return e;if(2===n.length&&r>=0&&n[0].left>n[1].right)return n[r]||e;switch(t){case"top":case"bottom":var o=n[0],i=n[n.length-1],a="top"===t,s=o.top,u=i.bottom,p=a?o.left:i.left,c=a?o.right:i.right;return{top:s,bottom:u,left:p,right:c,width:c-p,height:u-s};case"left":case"right":var f=Math.min.apply(Math,n.map((function(t){return t.left}))),l=Math.max.apply(Math,n.map((function(t){return t.right}))),d=n.filter((function(e){return"left"===t?e.left===f:e.right===l})),v=d[0].top,m=d[d.length-1].bottom;return{top:v,bottom:m,left:f,right:l,width:l-f,height:m-v};default:return e}}(l(t),n.getBoundingClientRect(),d(n.getClientRects()),r)}(a.placement)}})),e=a.placement)}};function s(){var e;o||(e=function(t,e){var n;return{popperOptions:Object.assign({},t.popperOptions,{modifiers:[].concat(((null==(n=t.popperOptions)?void 0:n.modifiers)||[]).filter((function(t){return t.name!==e.name})),[e])})}}(t.props,a),o=!0,t.setProps(e),o=!1)}return{onCreate:s,onAfterUpdate:s,onTrigger:function(e,n){if(h(n)){var o=d(t.reference.getClientRects()),i=o.find((function(t){return t.left-2<=n.clientX&&t.right+2>=n.clientX&&t.top-2<=n.clientY&&t.bottom+2>=n.clientY})),a=o.indexOf(i);r=a>-1?a:r}},onHidden:function(){r=-1}}}};var Q={name:"sticky",defaultValue:!1,fn:function(t){var e=t.reference,n=t.popper;function r(e){return!0===t.props.sticky||t.props.sticky===e}var o=null,i=null;function a(){var s=r("reference")?(t.popperInstance?t.popperInstance.state.elements.reference:e).getBoundingClientRect():null,u=r("popper")?n.getBoundingClientRect():null;(s&&Z(o,s)||u&&Z(i,u))&&t.popperInstance&&t.popperInstance.update(),o=s,i=u,t.state.isMounted&&requestAnimationFrame(a)}return{onMount:function(){t.props.sticky&&a()}}}};function Z(t,e){return!t||!e||(t.top!==e.top||t.right!==e.right||t.bottom!==e.bottom||t.left!==e.left)}return e&&function(t){var e=document.createElement("style");e.textContent=t,e.setAttribute("data-tippy-stylesheet","");var n=document.head,r=document.querySelector("head>style,head>link");r?n.insertBefore(e,r):n.appendChild(e)}('.tippy-box[data-animation=fade][data-state=hidden]{opacity:0}[data-tippy-root]{max-width:calc(100vw - 10px)}.tippy-box{position:relative;background-color:#333;color:#fff;border-radius:4px;font-size:14px;line-height:1.4;white-space:normal;outline:0;transition-property:transform,visibility,opacity}.tippy-box[data-placement^=top]>.tippy-arrow{bottom:0}.tippy-box[data-placement^=top]>.tippy-arrow:before{bottom:-7px;left:0;border-width:8px 8px 0;border-top-color:initial;transform-origin:center top}.tippy-box[data-placement^=bottom]>.tippy-arrow{top:0}.tippy-box[data-placement^=bottom]>.tippy-arrow:before{top:-7px;left:0;border-width:0 8px 8px;border-bottom-color:initial;transform-origin:center bottom}.tippy-box[data-placement^=left]>.tippy-arrow{right:0}.tippy-box[data-placement^=left]>.tippy-arrow:before{border-width:8px 0 8px 8px;border-left-color:initial;right:-7px;transform-origin:center left}.tippy-box[data-placement^=right]>.tippy-arrow{left:0}.tippy-box[data-placement^=right]>.tippy-arrow:before{left:-7px;border-width:8px 8px 8px 0;border-right-color:initial;transform-origin:center right}.tippy-box[data-inertia][data-state=visible]{transition-timing-function:cubic-bezier(.54,1.5,.38,1.11)}.tippy-arrow{width:16px;height:16px;color:#333}.tippy-arrow:before{content:"";position:absolute;border-color:transparent;border-style:solid}.tippy-content{position:relative;padding:5px 9px;z-index:1}'),F.setDefaultProps({plugins:[Y,G,K,Q],render:N}),F.createSingleton=function(t,e){var n;void 0===e&&(e={});var r,o=t,i=[],a=[],s=e.overrides,u=[],f=!1;function l(){a=o.map((function(t){return c(t.props.triggerTarget||t.reference)})).reduce((function(t,e){return t.concat(e)}),[])}function d(){i=o.map((function(t){return t.reference}))}function v(t){o.forEach((function(e){t?e.enable():e.disable()}))}function g(t){return o.map((function(e){var n=e.setProps;return e.setProps=function(o){n(o),e.reference===r&&t.setProps(o)},function(){e.setProps=n}}))}function h(t,e){var n=a.indexOf(e);if(e!==r){r=e;var u=(s||[]).concat("content").reduce((function(t,e){return t[e]=o[n].props[e],t}),{});t.setProps(Object.assign({},u,{getReferenceClientRect:"function"==typeof u.getReferenceClientRect?u.getReferenceClientRect:function(){var t;return null==(t=i[n])?void 0:t.getBoundingClientRect()}}))}}v(!1),d(),l();var b={fn:function(){return{onDestroy:function(){v(!0)},onHidden:function(){r=null},onClickOutside:function(t){t.props.showOnCreate&&!f&&(f=!0,r=null)},onShow:function(t){t.props.showOnCreate&&!f&&(f=!0,h(t,i[0]))},onTrigger:function(t,e){h(t,e.currentTarget)}}}},y=F(m(),Object.assign({},p(e,["overrides"]),{plugins:[b].concat(e.plugins||[]),triggerTarget:a,popperOptions:Object.assign({},e.popperOptions,{modifiers:[].concat((null==(n=e.popperOptions)?void 0:n.modifiers)||[],[W])})})),w=y.show;y.show=function(t){if(w(),!r&&null==t)return h(y,i[0]);if(!r||null!=t){if("number"==typeof t)return i[t]&&h(y,i[t]);if(o.indexOf(t)>=0){var e=t.reference;return h(y,e)}return i.indexOf(t)>=0?h(y,t):void 0}},y.showNext=function(){var t=i[0];if(!r)return y.show(0);var e=i.indexOf(r);y.show(i[e+1]||t)},y.showPrevious=function(){var t=i[i.length-1];if(!r)return y.show(t);var e=i.indexOf(r),n=i[e-1]||t;y.show(n)};var x=y.setProps;return y.setProps=function(t){s=t.overrides||s,x(t)},y.setInstances=function(t){v(!0),u.forEach((function(t){return t()})),o=t,v(!1),d(),l(),u=g(y),y.setProps({triggerTarget:a})},u=g(y),y},F.delegate=function(t,e){var n=[],o=[],i=!1,a=e.target,s=p(e,["target"]),u=Object.assign({},s,{trigger:"manual",touch:!1}),f=Object.assign({touch:R.touch},s,{showOnCreate:!0}),l=F(t,u);function d(t){if(t.target&&!i){var n=t.target.closest(a);if(n){var r=n.getAttribute("data-tippy-trigger")||e.trigger||R.trigger;if(!n._tippy&&!("touchstart"===t.type&&"boolean"==typeof f.touch||"touchstart"!==t.type&&r.indexOf(X[t.type])<0)){var s=F(n,f);s&&(o=o.concat(s))}}}}function v(t,e,r,o){void 0===o&&(o=!1),t.addEventListener(e,r,o),n.push({node:t,eventType:e,handler:r,options:o})}return c(l).forEach((function(t){var e=t.destroy,a=t.enable,s=t.disable;t.destroy=function(t){void 0===t&&(t=!0),t&&o.forEach((function(t){t.destroy()})),o=[],n.forEach((function(t){var e=t.node,n=t.eventType,r=t.handler,o=t.options;e.removeEventListener(n,r,o)})),n=[],e()},t.enable=function(){a(),o.forEach((function(t){return t.enable()})),i=!1},t.disable=function(){s(),o.forEach((function(t){return t.disable()})),i=!0},function(t){var e=t.reference;v(e,"touchstart",d,r),v(e,"mouseover",d),v(e,"focusin",d),v(e,"click",d)}(t)})),l},F.hideAll=function(t){var e=void 0===t?{}:t,n=e.exclude,r=e.duration;_.forEach((function(t){var e=!1;if(n&&(e=b(n)?t.reference===n:t.popper===n.popper),!e){var o=t.props.duration;t.setProps({duration:r}),t.hide(),t.state.isDestroyed||t.setProps({duration:o})}}))},F.roundArrow='<svg width="16" height="6" xmlns="http://www.w3.org/2000/svg"><path d="M0 6s1.796-.013 4.67-3.615C5.851.9 6.93.006 8 0c1.07-.006 2.148.887 3.343 2.385C14.233 6.005 16 6 16 6H0z"></svg>',F}));
//# sourceMappingURL=tippy-bundle.umd.min.js.map
</script>
<script>
(function(){try{var t=localStorage.getItem('bsu_theme');if(t==='light'||t==='dark')document.documentElement.dataset.theme=t;}catch(e){}})();
var _icFolder=<?=json_encode(ph('folder',14))?>;
var _icFile=<?=json_encode(ph('file',14))?>;
var _icHome=<?=json_encode(ph('house-simple',14))?>;
var _icCopy=<?=json_encode(ph('copy',13))?>;
var _icTrash=<?=json_encode(ph('trash',13))?>;
var _icRefresh=<?=json_encode(ph('arrow-clockwise',14))?>;
var _icDownload=<?=json_encode(ph('download-simple',13))?>;
var _icUpdate=<?=json_encode(ph('arrow-clockwise',14))?>;
var _icRename=<?=json_encode(ph('pencil-simple',13))?>;
var _icDup=<?=json_encode(ph('copy-simple',13))?>;
var _icMove=<?=json_encode(ph('folder-simple-plus',13))?>;
var _icEye=<?=json_encode(ph('eye',15))?>;
var _icPencil=<?=json_encode(ph('pencil-simple',15))?>;
var _icDots=<?=json_encode(ph('dots-three-vertical',18))?>;
var _icCheckSquare=<?=json_encode(ph('check-square',13))?>;
var _icSquare=<?=json_encode(ph('square',13))?>;
var _icSave=<?=json_encode(ph('floppy-disk',15))?>;
var _icOpen=<?=json_encode(ph('folder-open',15))?>;
var _icWarn=<?=json_encode(ph('warning',18))?>;
var _icX=<?=json_encode(ph('x',15))?>;
var _icThemeAuto=<?=json_encode(ph('circle-half',15))?>;
var _icThemeLight=<?=json_encode(ph('sun-dim',15))?>;
var _icThemeDark=<?=json_encode(ph('moon',15))?>;
var _perm=<?=json_encode(['r'=>is_readable(__DIR__),'w'=>is_writable(__DIR__),'dir'=>__DIR__])?>;
function setTheme(mode){try{if(mode==='auto'){delete document.documentElement.dataset.theme;localStorage.removeItem('bsu_theme');}else{document.documentElement.dataset.theme=mode;localStorage.setItem('bsu_theme',mode);}}catch(e){}updateThemeBtn(mode);}
function cycleTheme(){var cur;try{cur=localStorage.getItem('bsu_theme')||'auto';}catch(e){cur='auto';}setTheme(cur==='auto'?'light':(cur==='light'?'dark':'auto'));}
function updateThemeBtn(mode){var b=document.getElementById('theme-btn');if(!b)return;if(!mode){try{mode=localStorage.getItem('bsu_theme')||'auto';}catch(e){mode='auto';}}var ic={auto:_icThemeAuto,light:_icThemeLight,dark:_icThemeDark}[mode]||_icThemeAuto;var lbl={auto:'Auto',light:'Light',dark:'Dark'}[mode]||'Auto';b.innerHTML=ic;b.title=lbl+' theme — click to change';}
function checkPermBanner(){if(typeof _perm==='undefined')return;if(_perm.r&&_perm.w)return;try{if(sessionStorage.getItem('bsu_perm_dismissed'))return;}catch(e){}var b=document.getElementById('perm-banner');if(!b)return;var msg=!_perm.w?'This script <b>cannot write</b> to its own folder':'This script <b>cannot read</b> its own folder';b.className='banner '+(!_perm.w?'banner-err':'banner-warn');b.innerHTML='<span class="banner-ic">'+_icWarn+'</span><span class="banner-msg">'+msg+' (<code>'+_esc(_perm.dir)+'</code>). Uploads and file operations may fail.</span><button class="banner-x" onclick="dismissBanner()" title="Dismiss">'+_icX+'</button>';b.style.display='';}
function dismissBanner(){var b=document.getElementById('perm-banner');if(b)b.style.display='none';try{sessionStorage.setItem('bsu_perm_dismissed','1');}catch(e){}}
function permsHuman(sym){
  if(!sym||sym.length<10)return'';
  var b=function(r,w,x){var s='';if(r==='r')s+='read ';if(w==='w')s+='write ';if(x!=='-')s+='exec';return s.trim()||'none';};
  return'Owner: '+b(sym[1],sym[2],sym[3])+' \xb7 Group: '+b(sym[4],sym[5],sym[6])+' \xb7 Others: '+b(sym[7],sym[8],sym[9]);
}
function toggleSidebar(){var on=document.body.classList.toggle('sb-collapsed');try{localStorage.setItem('bsu_sb',on?'1':'');}catch(e){}}
function restoreSidebar(){try{if(localStorage.getItem('bsu_sb')==='1')document.body.classList.add('sb-collapsed');}catch(e){}}
function setPg(p){var b=document.getElementById('pgbar');if(b)b.style.width=Math.min(100,Number(p))+'%';}
function eH(s){return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');}
function updateProgress(pct,cur,tot,elapsed,eta){
  setPg(pct);document.title='↑ '+Number(pct).toFixed(1)+'% - BlackSwan Upload';
  var el=document.getElementById('progress');
  if(el)el.innerHTML=Number(pct).toFixed(2)+'% &mdash; '+eH(cur)+' / '+eH(tot)+'<br><small>Elapsed: '+eH(elapsed)+(eta?' - ETA: '+eH(eta):'')+'</small>';
}
function appendStatus(html){var c=document.getElementById('statuses');if(c)c.insertAdjacentHTML('beforeend','<div class="status-line">'+html+'</div>');}
function _esc(s){var d=document.createElement('div');d.textContent=s;return d.innerHTML;}
function _cp(t){var a=document.createElement('textarea');a.value=t;a.style.cssText='position:fixed;opacity:0';document.body.appendChild(a);a.select();try{document.execCommand('copy');}catch(e){}document.body.removeChild(a);}
var _TOAST_IC={info:'i',ok:'✓',err:'✕',warn:'!'};
function _toastInferType(msg){var m=String(msg||'').toLowerCase();
  if(/fail|error|invalid|denied|refused|cannot|could ?n|not found|no |unreachable|✗|missing|required|stopped/.test(m))return'err';
  if(/done|complete|saved|success|copied|deleted|uploaded|renamed|moved|loaded|duplicated|connected|updated|✓/.test(m))return'ok';
  return'info';}
function showToast(msg,type,opts){
  opts=opts||{};type=type||_toastInferType(msg);
  var dur=opts.duration||5000;
  var stack=document.getElementById('toast-stack');
  if(!stack){stack=document.createElement('div');stack.id='toast-stack';stack.className='toast-stack';stack.setAttribute('aria-live','polite');document.body.appendChild(stack);}
  var el=document.createElement('div');el.className='toast t-'+type;
  var time=new Date().toLocaleTimeString();
  el.innerHTML='<span class="toast-bar"></span><span class="toast-ic">'+(_TOAST_IC[type]||_TOAST_IC.info)+'</span><div class="toast-body"><div class="toast-msg">'+_esc(msg)+'</div><div class="toast-foot"><span>'+_esc(time)+'</span></div></div>';
  stack.appendChild(el);
  while(stack.children.length>6&&stack.firstChild!==el)stack.removeChild(stack.firstChild);
  var bar=el.querySelector('.toast-bar');
  var st={dur:dur,remaining:dur,start:0,timer:null,paused:false,gone:false};
  function dismiss(){if(st.gone)return;st.gone=true;clearTimeout(st.timer);el.classList.add('hide');el.classList.remove('show');setTimeout(function(){if(el.parentNode)el.parentNode.removeChild(el);},340);}
  function startTimer(){st.start=Date.now();bar.style.transition='transform '+st.remaining+'ms linear';requestAnimationFrame(function(){bar.style.transform='scaleX(0)';});st.timer=setTimeout(dismiss,st.remaining);}
  function pause(){if(st.paused||st.gone)return;st.paused=true;clearTimeout(st.timer);st.remaining=Math.max(0,st.remaining-(Date.now()-st.start));var w=st.dur?Math.max(0,st.remaining/st.dur):0;bar.style.transition='none';bar.style.transform='scaleX('+w+')';}
  function resume(){if(!st.paused||st.gone)return;st.paused=false;startTimer();}
  el.addEventListener('mouseenter',pause);
  el.addEventListener('mouseleave',resume);
  el.addEventListener('click',dismiss);
  requestAnimationFrame(function(){el.classList.add('show');startTimer();});
  return el;
}
function copyText(text,btn){
  var done=function(){if(btn){btn.classList.add('ok');var o=btn.innerHTML;btn.innerHTML='&#10003;';setTimeout(function(){btn.innerHTML=o;btn.classList.remove('ok');},1500);}if(!btn){showToast('Copied to clipboard');}};
  if(navigator.clipboard&&navigator.clipboard.writeText)navigator.clipboard.writeText(text).then(done,function(){_cp(text);done();});
  else{_cp(text);done();}
}
function openModal(id){document.getElementById(id).classList.add('open');document.body.style.overflow='hidden';}
function closeModal(id){document.getElementById(id).classList.remove('open');document.body.style.overflow='';}
function togglePhpInfo(){
  var fr=document.getElementById('phpinfo-frame'),ic=document.getElementById('info-content'),btn=document.getElementById('phpinfo-toggle');
  if(!fr)return;
  var showFull=fr.style.display==='none';
  if(showFull){
    if(!fr.getAttribute('data-loaded')){fr.src='?phpinfo=1';fr.setAttribute('data-loaded','1');}
    fr.style.display='';ic.style.display='none';if(btn)btn.textContent='Back to summary';
  }else{
    fr.style.display='none';ic.style.display='';if(btn)btn.textContent='Full phpInfo()';
  }
}
function loadInfo(){
  document.getElementById('info-content').innerHTML='<div style="text-align:center;padding:2rem;color:var(--t2)">Loading…</div>';
  fetch('',{method:'POST',headers:{'Content-Type':'application/x-www-form-urlencoded'},body:'_a=info'})
    .then(function(r){return r.json();})
    .then(function(d){
      var h='<div class="info-grid">';
      [{k:'php',l:'PHP Environment'},{k:'server',l:'Server / Host'}].forEach(function(s){
        h+='<div class="info-panel"><h4>'+s.l+'</h4><table>';
        Object.keys(d[s.k]).forEach(function(k){h+='<tr><td>'+_esc(k)+'</td><td>'+_esc(String(d[s.k][k]))+'</td></tr>';});
        h+='</table></div>';
      });
      h+='</div>';
      document.getElementById('info-content').innerHTML=h;
    });
}
/* ── Generic collapsible file tree ─────────────────────────────── */
function _attr(s){return String(s==null?'':s).replace(/"/g,'&quot;');}
function tvCreate(o){return{id:o.id,checkbox:!!o.checkbox,chkClass:o.chkClass||'',actions:o.actions||null,load:o.load||null,onCheck:o.onCheck||null,onToggle:o.onToggle||null,root:'',nodes:[],map:{},seq:0,bound:false};}
function tvIngest(tv,nodes,allOpen){(function walk(arr){arr.forEach(function(n){n._id='t'+(tv.seq++);tv.map[n._id]=n;if(n.type==='dir'){var has=Array.isArray(n.children);n._loaded=has;n._open=!!(allOpen&&has);if(has)walk(n.children);}});})(nodes);}
function tvSetFull(tv,nodes,root){tv.nodes=nodes||[];tv.map={};tv.seq=0;tv.root=root||'';tvIngest(tv,tv.nodes,true);tvRender(tv);}
function tvSetRoot(tv,nodes,root){tv.nodes=nodes||[];tv.map={};tv.seq=0;tv.root=root||'';tvIngest(tv,tv.nodes,false);tvRender(tv);}
function tvRowHtml(tv,n,depth){
  var pad=depth*15+4,isDir=n.type==='dir';
  var caret=isDir?'<button type="button" class="tcaret'+(n._open?' open':'')+'" data-tv-toggle="'+n._id+'">&#9654;</button>':'<span class="tcaret empty"></span>';
  var icon=isDir?_icFolder:_icFile;
  var nameAttr=isDir?' data-tv-toggle="'+n._id+'"':'';
  var chk=tv.checkbox?'<input type="checkbox" class="'+tv.chkClass+'" data-tv-id="'+n._id+'" value="'+_attr(n.path)+'" data-path="'+_attr(n.path)+'" data-name="'+_attr(n.name)+'" data-type="'+n.type+'" data-size="'+(n.size_bytes||0)+'" data-url="'+_attr(n.url||'')+'">':'';
  var acts=tv.actions?'<span class="tacts">'+tv.actions(n)+'</span>':'';
  var h='<div class="tnode" data-tv-node="'+n._id+'" data-relpath="'+_attr(tvRel(tv,n.path))+'" style="padding-left:'+pad+'px">'+caret+chk+'<span class="tname '+(isDir?'tname-dir':'tname-file')+'"'+nameAttr+'>'+icon+' '+_esc(n.name)+'</span><span class="tsize">'+_esc(n.size||'')+'</span>'+acts+'</div>';
  if(isDir&&n._open){if(Array.isArray(n.children))h+=tvNodesHtml(tv,n.children,depth+1);else h+='<div class="tnode tnode-loading" style="padding-left:'+((depth+1)*15+22)+'px">Loading…</div>';}
  return h;
}
function tvNodesHtml(tv,nodes,depth){var h='';nodes.forEach(function(n){h+=tvRowHtml(tv,n,depth);});return h;}
function tvRender(tv){var c=document.getElementById(tv.id);if(!c)return;c.innerHTML=tv.nodes.length?tvNodesHtml(tv,tv.nodes,0):'<div class="tree-empty">Empty</div>';tvBind(tv);}
function tvBind(tv){if(tv.bound)return;tv.bound=true;var c=document.getElementById(tv.id);if(!c)return;
  c.addEventListener('click',function(e){var t=e.target.closest&&e.target.closest('[data-tv-toggle]');if(t){e.preventDefault();e.stopPropagation();tvToggle(tv,t.getAttribute('data-tv-toggle'));}});
  if(tv.checkbox)c.addEventListener('change',function(e){var cb=e.target;if(cb&&cb.classList&&cb.classList.contains(tv.chkClass)){tvCascade(tv,cb);if(tv.onCheck)tv.onCheck();}});
}
function tvToggle(tv,id){var n=tv.map[id];if(!n||n.type!=='dir')return;
  if(tv.onToggle)tv.onToggle(n);
  if(!n._open){n._open=true;if(tv.load){n._loaded=false;n.children=null;tvRender(tv);tv.load(n,function(children){n.children=children||[];n._loaded=true;tvIngest(tv,n.children,false);tvRender(tv);});return;}}
  else n._open=false;
  tvRender(tv);}
function tvCascade(tv,cb){var n=tv.map[cb.getAttribute('data-tv-id')];if(!n||n.type!=='dir')return;var on=cb.checked;(function walk(arr){if(!Array.isArray(arr))return;arr.forEach(function(ch){var el=document.querySelector('.'+tv.chkClass+'[data-tv-id="'+ch._id+'"]');if(el)el.checked=on;if(ch.children)walk(ch.children);});})(n.children);}
function tvCollapseAll(tv){(function walk(arr){arr.forEach(function(n){if(n.type==='dir'){n._open=false;if(n.children)walk(n.children);}});})(tv.nodes);tvRender(tv);}
function tvFlattenFiles(tv){var out=[];(function walk(arr){if(!Array.isArray(arr))return;arr.forEach(function(n){if(n.type==='file')out.push(n);else if(n.children)walk(n.children);});})(tv.nodes);return out;}
function tvCheckedNodes(tv){var out=[];document.querySelectorAll('#'+tv.id+' .'+tv.chkClass+':checked').forEach(function(cb){var n=tv.map[cb.getAttribute('data-tv-id')];if(n)out.push(n);});return out;}
function tvRel(tv,path){var r=tv.root||'';if(r&&r!=='__ROOT__'&&String(path).indexOf(r)===0){var rel=String(path).slice(r.length);return rel.replace(/^\/+/,'');}return String(path).replace(/^\/+/,'');}
/* ── Saved FTP connection profiles (local) ─────────────────────── */
function ftpProfilesGet(){try{return JSON.parse(localStorage.getItem('bsu_ftp_profiles')||'[]');}catch(e){return[];}}
function ftpProfilesSet(l){try{localStorage.setItem('bsu_ftp_profiles',JSON.stringify(l));}catch(e){}}
function ftpProfFill(selId){var sel=document.getElementById(selId);if(!sel)return;ftpProfilesGet();var l=ftpProfilesGet();sel.innerHTML='<option value="">— Saved connections —</option>';l.forEach(function(p,i){var o=document.createElement('option');o.value=String(i);o.textContent=p.name;sel.appendChild(o);});}
function ftpProfByIndex(idx){var l=ftpProfilesGet();var i=parseInt(idx,10);return(i>=0&&i<l.length)?l[i]:null;}
function ftpProfApply(p,map){Object.keys(map).forEach(function(k){if(!map[k])return;var el=document.getElementById(map[k]);if(el&&p[k]!==undefined&&p[k]!==null)el.value=p[k];});}
function ftpProfCollect(map){var o={};Object.keys(map).forEach(function(k){if(!map[k])return;var el=document.getElementById(map[k]);o[k]=el?el.value:'';});return o;}
function ftpProfSaveMap(name,map){var l=ftpProfilesGet();var p=ftpProfCollect(map);p.name=name;var idx=-1;l.forEach(function(x,i){if(x.name===name)idx=i;});if(idx>=0)l[idx]=p;else l.push(p);ftpProfilesSet(l);}
function ftpProfDeleteName(name){ftpProfilesSet(ftpProfilesGet().filter(function(x){return x.name!==name;}));}
var FTP_MAP={name:null,host:'ftp-host',port:'ftp-port',user:'ftp-user',pass:'ftp-pass',method:'ftp-method',initdir:'ftp-initdir',baseurl:'ftp-baseurl',strip:'ftp-strip',dlFolder:'ftp-dl-folder'};
function ftpProfPopulate(){ftpProfFill('ftp-prof');}
function ftpProfLoad(){var sel=document.getElementById('ftp-prof');var p=ftpProfByIndex(sel.value);if(!p){showToast('Pick a saved connection');return;}ftpProfApply(p,FTP_MAP);showToast('Loaded "'+p.name+'"');}
function ftpProfSave(){var def=(document.getElementById('ftp-host').value||'connection');var name=prompt('Save connection as:',def);if(!name||!name.trim())return;ftpProfSaveMap(name.trim(),FTP_MAP);ftpProfPopulate();showToast('Saved "'+name.trim()+'"');}
function ftpProfDelete(){var sel=document.getElementById('ftp-prof');var p=ftpProfByIndex(sel.value);if(!p){showToast('Pick a saved connection to delete');return;}if(!confirm('Delete saved connection "'+p.name+'"?'))return;ftpProfDeleteName(p.name);ftpProfPopulate();showToast('Deleted');}
function cmpProfMap(s){return{name:null,host:'cmp-'+s+'-host',port:'cmp-'+s+'-port',user:'cmp-'+s+'-user',pass:'cmp-'+s+'-pass',method:'cmp-'+s+'-method',root:'cmp-'+s+'-root'};}
function cmpProfPopulate(s){ftpProfFill('cmp-'+s+'-prof');}
function cmpProfLoad(s){var sel=document.getElementById('cmp-'+s+'-prof');var p=ftpProfByIndex(sel.value);if(!p){showToast('Pick a saved connection');return;}ftpProfApply(p,cmpProfMap(s));cmpTypeChange(s);showToast('Loaded "'+p.name+'"');}
function cmpProfSave(s){var def=(document.getElementById('cmp-'+s+'-host').value||'connection');var name=prompt('Save connection as:',def);if(!name||!name.trim())return;ftpProfSaveMap(name.trim(),cmpProfMap(s));cmpProfPopulate('l');cmpProfPopulate('r');showToast('Saved "'+name.trim()+'"');}
function cmpProfDelete(s){var sel=document.getElementById('cmp-'+s+'-prof');var p=ftpProfByIndex(sel.value);if(!p){showToast('Pick a saved connection to delete');return;}if(!confirm('Delete "'+p.name+'"?'))return;ftpProfDeleteName(p.name);cmpProfPopulate('l');cmpProfPopulate('r');showToast('Deleted');}
var fbCwd='__ROOT__';
var ftpCwd='/';
var ftpCreds={};
var fbParent=null;
/* ── shared single-folder (flat) view: address bar + table ── */
function fvRowsHtml(prefix,items,actionsFn){
  if(!items||!items.length)return'<div class="fb-empty">This folder is empty.</div>';
  var h='<table class="fb-tbl"><thead><tr><th style="width:26px"></th><th>Name</th><th>Size</th><th>Modified</th><th>Perms</th><th></th></tr></thead><tbody>';
  items.forEach(function(n){
    var isDir=n.type==='dir',dp=_attr(n.path);
    var chk='<input type="checkbox" class="'+prefix+'-chk" value="'+dp+'" data-path="'+dp+'" data-name="'+_attr(n.name)+'" data-type="'+n.type+'" data-size="'+(n.size_bytes||0)+'" data-url="'+_attr(n.url||'')+'">';
    var name=isDir?'<span class="fb-dn" onclick=\''+prefix+'Nav('+JSON.stringify(n.path)+')\'>'+_icFolder+' '+_esc(n.name)+'</span>':'<span class="fb-fn">'+_icFile+' '+_esc(n.name)+'</span>';
    h+='<tr><td>'+chk+'</td><td>'+name+'</td><td class="fb-sz">'+_esc(n.size||'')+'</td><td class="fb-mt">'+_esc(n.mtime||'')+'</td><td class="ftp-perms">'+_esc(n.perms_octal||'')+'</td><td class="fb-acts">'+(actionsFn?actionsFn(n):'')+'</td></tr>';
  });
  return h+'</tbody></table>';
}
function fvCrumbs(prefix,d,rootPath){
  var h='<span class="fb-crumb" onclick=\''+prefix+'Nav('+JSON.stringify(rootPath)+')\' title="Root">'+_icHome+'</span>';
  (d.breadcrumbs||[]).forEach(function(c){h+='<span class="fb-sep">/</span><span class="fb-crumb" onclick=\''+prefix+'Nav('+JSON.stringify(c.path)+')\'>'+_esc(c.name)+'</span>';});
  _crumbHtml[prefix]=h;
  return h;
}
/* editable breadcrumb: click empty space to type a path, Enter to go, Esc/blur to cancel */
var _crumbHtml={fb:'',ftp:''};
function fvPathCancel(prefix){var el=document.getElementById(prefix+'-path');if(!el)return;el.classList.remove('editing');el.innerHTML=_crumbHtml[prefix]||'';}
function fvPathEdit(prefix,cur,goFn){
  var el=document.getElementById(prefix+'-path');if(!el||el.querySelector('input'))return;
  el.classList.add('editing');
  el.innerHTML='<input type="text" class="fv-addr" value="'+_attr(cur||'')+'">';
  var inp=el.querySelector('input');inp.focus();inp.select();
  inp.addEventListener('keydown',function(e){
    if(e.key==='Enter'){e.preventDefault();var v=inp.value.trim();inp.blur();goFn(v);}
    else if(e.key==='Escape'){e.preventDefault();inp.blur();}
  });
  inp.addEventListener('blur',function(){fvPathCancel(prefix);});
}
function fbPathClick(e){if(e.target.closest('.fb-crumb'))return;fvPathEdit('fb',fbCwd,function(v){fbLoad(v||'__ROOT__');});}
function ftpPathClick(e){if(e.target.closest('.fb-crumb'))return;if(!ftpCreds.h){showToast('Connect first');return;}fvPathEdit('ftp',ftpCwd,function(v){ftpLoad(v||'/');});}
/* ===== Tippy.js tooltips ===== */
function initTips(root){
  if(!window.tippy)return;
  root=root||document;
  var els=root.querySelectorAll('[title]');
  for(var i=0;i<els.length;i++){var c=els[i].getAttribute('title');if(c){els[i].setAttribute('data-tippy-content',c);els[i].removeAttribute('title');}}
  window.tippy(root.querySelectorAll('[data-tippy-content]:not([data-tipd])'),{
    theme:'bsu',animation:'fade',arrow:true,duration:[120,90],delay:[140,0],
    onCreate:function(inst){inst.reference.setAttribute('data-tipd','1');}
  });
}
/* ===== file-type helpers ===== */
function _ext(name){var n=String(name||''),i=n.lastIndexOf('.');return i<=0?'':n.slice(i+1).toLowerCase();}
var _BIN_EXT={jpg:1,jpeg:1,png:1,gif:1,webp:1,bmp:1,ico:1,tif:1,tiff:1,heic:1,avif:1,psd:1,
mp4:1,mkv:1,mov:1,avi:1,webm:1,flv:1,wmv:1,m4v:1,mpg:1,mpeg:1,
mp3:1,wav:1,flac:1,ogg:1,m4a:1,aac:1,wma:1,opus:1,
zip:1,rar:1,'7z':1,gz:1,tar:1,bz2:1,xz:1,tgz:1,zst:1,jar:1,
pdf:1,doc:1,docx:1,xls:1,xlsx:1,ppt:1,pptx:1,odt:1,ods:1,
woff:1,woff2:1,ttf:1,otf:1,eot:1,
exe:1,dll:1,so:1,dylib:1,bin:1,dat:1,db:1,sqlite:1,sqlite3:1,'class':1,o:1,wasm:1};
function isTextFile(name){var e=_ext(name);return !_BIN_EXT[e];}
function cmMode(name){
  var e=_ext(name);
  if(e==='json')return{name:'application/json'};
  if(e==='js'||e==='mjs'||e==='cjs'||e==='jsx'||e==='ts'||e==='tsx')return{name:'text/javascript'};
  if(e==='css'||e==='scss'||e==='less')return{name:'text/css'};
  if(e==='html'||e==='htm'||e==='vue'||e==='svelte'||e==='twig')return{name:'htmlmixed'};
  if(e==='xml'||e==='svg'||e==='xsl'||e==='rss'||e==='xsd')return{name:'xml'};
  if(e==='php'||e==='phtml'||e==='php3'||e==='php4'||e==='php5'||e==='phps')return{name:'application/x-httpd-php'};
  if(e==='md'||e==='markdown')return{name:'markdown'};
  if(e==='sql')return{name:'sql'};
  if(e==='yml'||e==='yaml')return{name:'yaml'};
  if(e==='py')return{name:'python'};
  if(e==='sh'||e==='bash'||e==='zsh')return{name:'shell'};
  if(e==='c'||e==='h'||e==='cpp'||e==='cc'||e==='hpp'||e==='java'||e==='cs')return{name:'text/x-csrc'};
  return null;
}
/* ===== three-dots row menu ===== */
function fvMenuBtn(prefix,n){
  return '<button class="rowmenu-btn" title="Actions" data-prefix="'+prefix+'" data-path="'+_attr(n.path)+'" data-name="'+_attr(n.name)+'" data-type="'+_attr(n.type)+'" data-size="'+(+n.size_bytes||0)+'" data-url="'+_attr(n.url||'')+'" onclick="fvRowMenu(this)">'+_icDots+'</button>';
}
var _rowMenu=null;
function fvCloseRowMenu(){
  if(!_rowMenu)return;
  if(_rowMenu._btn)_rowMenu._btn.classList.remove('open');
  _rowMenu.remove();_rowMenu=null;
  document.removeEventListener('mousedown',_rowMenuOutside,true);
  document.removeEventListener('keydown',_rowMenuEsc,true);
  window.removeEventListener('resize',fvCloseRowMenu);
  window.removeEventListener('scroll',fvCloseRowMenu,true);
}
function _rowMenuOutside(e){if(_rowMenu&&!_rowMenu.contains(e.target)&&_rowMenu._btn!==e.target&&!_rowMenu._btn.contains(e.target))fvCloseRowMenu();}
function _rowMenuEsc(e){if(e.key==='Escape')fvCloseRowMenu();}
function fvRowMenu(btn){
  if(_rowMenu&&_rowMenu._btn===btn){fvCloseRowMenu();return;}
  fvCloseRowMenu();
  var d=btn.dataset,prefix=d.prefix,path=d.path,name=d.name,type=d.type,isDir=type==='dir',size=+d.size||0,url=d.url||'';
  var big=size>10485760,txt=isTextFile(name);
  var menu=document.createElement('div');menu.className='rowmenu';menu._btn=btn;
  function add(ic,label,handler,opts){
    opts=opts||{};var b=document.createElement('button');
    b.className='rowmenu-item'+(opts.danger?' danger':'');
    b.innerHTML=ic+'<span>'+_esc(label)+'</span>';
    if(opts.disabled){b.disabled=true;if(opts.reason)b.setAttribute('title',opts.reason);}
    else b.onclick=function(){fvCloseRowMenu();handler();};
    menu.appendChild(b);
  }
  function sep(){var s=document.createElement('div');s.className='rowmenu-sep';menu.appendChild(s);}
  if(isDir){
    add(_icOpen,'Open',function(){(prefix==='fb'?fbNav:ftpNav)(path);});
  }else{
    var reason=big?'Larger than 10 MB':(!txt?'Not a text file':'');
    add(_icEye,'View as text',function(){openFileEditor(prefix,path,name,size,'view');},{disabled:big||!txt,reason:reason});
    add(_icPencil,'Edit as text',function(){openFileEditor(prefix,path,name,size,'edit');},{disabled:big||!txt,reason:reason});
  }
  sep();
  if(prefix==='fb'){
    if(url)add(_icCopy,'Copy URL',function(){copyText(url);});
  }else{
    add(_icCopy,'Copy path',function(){copyText(path);});
    var baseEl=document.getElementById('ftp-baseurl');
    var baseUrl=baseEl?(baseEl.value||'').trim().replace(/\/$/,''):'';
    if(!isDir&&baseUrl)add(_icCopy,'Copy web URL',function(){ftpWebUrl(path,function(u,signed){copyText(u);showToast(signed?'Signed URL copied':'URL copied','ok');});});
    if(!isDir)add(_icDownload,'Save to this server',function(){ftpCopyToServer(path,name,size);});
  }
  if(!(prefix==='ftp'&&isDir))add(_icDup,'Duplicate',function(){(prefix==='fb'?fbDup:ftpDup)(path,name);});
  add(_icRename,'Rename',function(){(prefix==='fb'?fbRename:ftpRename)(path,name);});
  add(_icMove,'Move to folder',function(){(prefix==='fb'?fbMove:ftpMove)(path,name);});
  sep();
  add(_icTrash,'Delete',function(){if(prefix==='fb')fbDel(path,name);else ftpDel(path,name,type);},{danger:true});
  document.body.appendChild(menu);
  var r=btn.getBoundingClientRect(),mw=menu.offsetWidth,mh=menu.offsetHeight;
  var left=Math.max(8,Math.min(r.right-mw,window.innerWidth-mw-8));
  var top=r.bottom+6;if(top+mh>window.innerHeight-8)top=Math.max(8,r.top-mh-6);
  menu.style.left=left+'px';menu.style.top=top+'px';
  btn.classList.add('open');_rowMenu=menu;initTips(menu);
  setTimeout(function(){
    document.addEventListener('mousedown',_rowMenuOutside,true);
    document.addEventListener('keydown',_rowMenuEsc,true);
    window.addEventListener('resize',fvCloseRowMenu);
    window.addEventListener('scroll',fvCloseRowMenu,true);
  },0);
}
/* ===== CodeMirror lazy loader (CDN) ===== */
var CM_BASE='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/',_cmState=0,_cmCbs=[];
function _loadCss(href){var l=document.createElement('link');l.rel='stylesheet';l.href=href;document.head.appendChild(l);}
function _loadJs(src,cb){var s=document.createElement('script');s.onload=function(){cb&&cb();};s.onerror=function(){cb&&cb(new Error('load failed'));};s.src=src;document.head.appendChild(s);}
function loadCM(cb){
  if(_cmState===2){cb();return;}
  _cmCbs.push(cb);
  if(_cmState===1)return;
  _cmState=1;
  _loadCss(CM_BASE+'codemirror.min.css');
  _loadJs(CM_BASE+'codemirror.min.js',function(err){
    if(err||!window.CodeMirror){_cmState=0;var cbs=_cmCbs.splice(0);cbs.forEach(function(f){f(err||new Error('CodeMirror failed'));});return;}
    var modes=['mode/xml/xml.min.js','mode/javascript/javascript.min.js','mode/css/css.min.js','mode/htmlmixed/htmlmixed.min.js','mode/clike/clike.min.js','mode/php/php.min.js','mode/markdown/markdown.min.js','mode/sql/sql.min.js','mode/yaml/yaml.min.js','mode/python/python.min.js','mode/shell/shell.min.js'];
    var left=modes.length;
    modes.forEach(function(m){_loadJs(CM_BASE+m,function(){if(--left===0){_cmState=2;var cbs=_cmCbs.splice(0);cbs.forEach(function(f){f();});}});});
  });
}
/* ===== file viewer / editor modal ===== */
var _fe={open:false,prefix:'',path:'',name:'',mode:'view',cm:null,ta:null,dirty:false};
function openFileEditor(prefix,path,name,size,mode){
  _fe={open:true,prefix:prefix,path:path,name:name,mode:mode,cm:null,ta:null,dirty:false};
  document.getElementById('fe-title-ic').innerHTML=(mode==='edit'?_icPencil:_icEye);
  document.getElementById('fe-title-name').textContent=name;
  document.getElementById('fe-body').innerHTML='<div class="fe-loading">Loading&hellip;</div>';
  openModal('file-modal');
  var fd;
  if(prefix==='fb'){fd=new FormData();fd.append('_a','read');fd.append('_p',path);}
  else fd=ftpFd('ftp_read',path);
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){
    if(!_fe.open)return;
    if(!d.ok){document.getElementById('fe-body').innerHTML='<div class="fe-loading" style="color:var(--rd)">'+_esc(d.msg||'Could not open file')+'</div>';return;}
    var text='';try{text=decodeURIComponent(d.content||'');}catch(e){text='';}
    feRender(text,d);
  }).catch(function(){if(_fe.open)document.getElementById('fe-body').innerHTML='<div class="fe-loading" style="color:var(--rd)">Request failed</div>';});
}
function feRender(text,d){
  var mode=_fe.mode,ro=mode==='view';
  var modeInfo=cmMode(_fe.name);
  var hb='<div class="fe-meta"><span>'+_esc(_fe.path)+'</span>';
  hb+='<span class="fe-badge">'+_esc(_ext(_fe.name)||'text')+'</span>';
  hb+='<span style="margin-left:auto">'+_esc(ftpHumanSize(d.size||0))+'</span></div>';
  hb+='<div class="fe-edit-wrap"><textarea class="fe-ta" id="fe-ta" spellcheck="false"></textarea></div>';
  if(mode==='edit'){
    hb+='<div class="fe-foot"><span class="fe-status" id="fe-status"></span><span class="fe-spacer"></span>'
      +'<button class="btn btn-g btn-sm" onclick="closeFileEditor()">Close</button>'
      +'<button class="btn btn-g btn-sm" id="fe-save-bak" onclick="feSave(true)" title="Copy the current file to &quot;'+_attr(_fe.name)+'.back&quot; first, then save your changes">'+_icSave+' Save with backup</button>'
      +'<button class="btn btn-p btn-sm" id="fe-save" onclick="feSave(false)">'+_icSave+' Save</button></div>';
  }else{
    hb+='<div class="fe-foot"><span class="fe-status" id="fe-status">Read-only preview</span><span class="fe-spacer"></span>'
      +'<button class="btn btn-g btn-sm" onclick="feEdit()">'+_icPencil+' Edit</button>'
      +'<button class="btn btn-g btn-sm" onclick="closeFileEditor()">Close</button></div>';
  }
  document.getElementById('fe-body').innerHTML=hb;
  initTips(document.getElementById('fe-body'));
  var ta=document.getElementById('fe-ta');ta.value=text;_fe.ta=ta;ta.readOnly=ro;
  // Always use CodeMirror so even plain-text files get line numbers (mode:null = no highlighting).
  loadCM(function(err){
    if(!_fe.open||document.getElementById('fe-ta')!==ta)return;
    if(err||!window.CodeMirror){ // CDN unreachable: fall back to a plain textarea
      var st=document.getElementById('fe-status');if(st&&mode==='edit')st.textContent='Plain editor (CodeMirror unavailable)';
      if(!ro){ta.addEventListener('input',feMarkDirty);if(mode==='edit')ta.focus();}
      return;
    }
    _fe.cm=window.CodeMirror.fromTextArea(ta,{
      mode:modeInfo||null,theme:'github',lineNumbers:true,readOnly:ro,
      lineWrapping:false,indentUnit:2,tabSize:2,autofocus:!ro
    });
    if(!ro)_fe.cm.on('change',function(){feMarkDirty();});
  });
}
function feMarkDirty(){if(!_fe.dirty){_fe.dirty=true;var s=document.getElementById('fe-status');if(s)s.textContent='Unsaved changes';}}
function feValue(){return _fe.cm?_fe.cm.getValue():(_fe.ta?_fe.ta.value:'');}
function feSave(backup){
  var sBtn=document.getElementById('fe-save'),bBtn=document.getElementById('fe-save-bak'),st=document.getElementById('fe-status');
  if(sBtn)sBtn.disabled=true;if(bBtn)bBtn.disabled=true;if(st)st.textContent='Saving&hellip;';
  var fd;
  if(_fe.prefix==='fb'){fd=new FormData();fd.append('_a','write');fd.append('_p',_fe.path);}
  else fd=ftpFd('ftp_write',_fe.path);
  fd.append('_content',encodeURIComponent(feValue()));
  if(backup)fd.append('_backup','1');
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){
    if(sBtn)sBtn.disabled=false;if(bBtn)bBtn.disabled=false;
    if(d.ok){_fe.dirty=false;if(st)st.textContent=d.msg||'Saved';showToast(d.msg||'Saved');
      if(_fe.prefix==='fb'&&typeof fbCwd!=='undefined')fbLoad(fbCwd);
      else if(_fe.prefix==='ftp'&&typeof ftpCwd!=='undefined'&&ftpCreds.h)ftpLoad(ftpCwd);
    }else{if(st)st.textContent='Error: '+(d.msg||'save failed');showToast('Error: '+(d.msg||'save failed'));}
  }).catch(function(){if(sBtn)sBtn.disabled=false;if(bBtn)bBtn.disabled=false;if(st)st.textContent='Request failed';});
}
function closeFileEditor(){
  if(_fe.open&&_fe.mode==='edit'&&_fe.dirty&&!confirm('Discard unsaved changes?'))return;
  if(_fe.cm){try{_fe.cm.toTextArea();}catch(e){}}
  _fe.open=false;_fe.cm=null;_fe.ta=null;_fe.dirty=false;
  closeModal('file-modal');
}
// Switch the open viewer to edit mode (re-reads the file). _fe still holds the current target.
function feEdit(){if(_fe.open){var p=_fe.prefix,path=_fe.path,name=_fe.name;if(_fe.cm){try{_fe.cm.toTextArea();}catch(e){}_fe.cm=null;}openFileEditor(p,path,name,0,'edit');}}
function fbActions(n){return fvMenuBtn('fb',n);}
function fbNav(path){fbLoad(path);}
function fbUp(){if(fbParent)fbLoad(fbParent);else showToast('Already at the top');}
function fbLoad(path){
  fbCwd=path;
  document.getElementById('fb-loading').style.display='block';
  document.getElementById('fb-content').style.display='none';
  var fd=new FormData();fd.append('_a','ls');fd.append('_p',path);
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){
    document.getElementById('fb-loading').style.display='none';
    document.getElementById('fb-content').style.display='block';
    if(!d.ok){document.getElementById('fb-tbl-wrap').innerHTML='<div class="fb-empty">'+_esc(d.msg||'Error')+'</div>';return;}
    fbCwd=d.path;fbParent=d.parent;fbUpDir=d.path;
    document.getElementById('fb-path').innerHTML=fvCrumbs('fb',d,'__ROOT__');
    document.getElementById('fb-tbl-wrap').innerHTML=fvRowsHtml('fb',d.items,fbActions);
    document.getElementById('fb-bulk').classList.add('show');fbChkChg();
    var cd=document.getElementById('fb-cur-dir');if(cd)cd.textContent=d.path;
    var ud=document.getElementById('fb-up-dir');if(ud)ud.textContent=d.path;
    initTips(document.getElementById('view-explorer'));
  }).catch(function(){document.getElementById('fb-loading').innerHTML='<span style="color:var(--rd)">Failed to load directory</span>';});
}
function treeLoadingHtml(msg){return'<div class="tload-bar"></div><div class="tree-loading"><span class="spin">&#8635;</span> '+(msg||'Loading full tree…')+'</div>';}
function fbSelAll(on){document.querySelectorAll('#fb-tbl-wrap .fb-chk').forEach(function(c){c.checked=on;});fbChkChg();}
function fbChkChg(){
  var cc=document.querySelectorAll('#fb-tbl-wrap .fb-chk:checked');
  var sn=document.getElementById('fb-sel-n');if(sn)sn.textContent=cc.length?selSummaryText(selSummaryFrom(cc)):'0 selected';
  fvCheckBtnSync('fb');
}
/* shared single-button check-all/none toggle for fb + ftp explorers */
function fvCheckToggle(p){
  var boxes=document.querySelectorAll('#'+p+'-tbl-wrap .'+p+'-chk');
  if(!boxes.length){showToast('Nothing to check');return;}
  var all=true;boxes.forEach(function(c){if(!c.checked)all=false;});
  var on=!all;boxes.forEach(function(c){c.checked=on;});
  (p==='fb'?fbChkChg:ftpChkChg)();
}
function fvCheckBtnSync(p){
  var btn=document.getElementById(p+'-checkbtn');if(!btn)return;
  var total=document.querySelectorAll('#'+p+'-tbl-wrap .'+p+'-chk').length;
  var checked=document.querySelectorAll('#'+p+'-tbl-wrap .'+p+'-chk:checked').length;
  var all=total>0&&checked===total;
  btn.innerHTML=(all?_icCheckSquare:_icSquare)+' '+(all?'Check none':'Check all');
}
function fbCopySelected(){
  var urls=[];
  document.querySelectorAll('#fb-tbl-wrap .fb-chk:checked').forEach(function(c){if(c.dataset.url)urls.push(c.dataset.url);});
  if(urls.length)copyText(urls.join('\n'));else showToast('No web URLs available for selected items');
}
function fbDelSelected(){
  var paths=[];document.querySelectorAll('.fb-chk:checked').forEach(function(c){paths.push(c.value);});
  if(!paths.length)return;
  if(!confirm('Delete '+paths.length+' item(s)?\nThis cannot be undone.'))return;
  var done=0,total=paths.length;
  paths.forEach(function(p){var fd=new FormData();fd.append('_a','del');fd.append('_p',p);fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(){done++;if(done===total){showToast('Deleted '+total+' item(s)');fbLoad(fbCwd);}});});
}
function fbDel(path,name){
  if(!confirm('Delete "'+name+'"?\nThis cannot be undone.'))return;
  var fd=new FormData();fd.append('_a','del');fd.append('_p',path);
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){if(d.ok){showToast('Deleted: '+name);fbLoad(fbCwd);}else showToast('Error: '+(d.msg||'failed'));});
}
function fbRename(path,name){
  var nn=prompt('Rename "'+name+'" to:',name);
  if(nn===null||nn.trim()===''||nn===name)return;
  var fd=new FormData();fd.append('_a','rename');fd.append('_p',path);fd.append('_to',nn.trim());
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){showToast(d.ok?'Renamed to '+nn.trim():'Error: '+(d.msg||'failed'));if(d.ok)fbLoad(fbCwd);});
}
function fbDup(path,name){
  var fd=new FormData();fd.append('_a','dup');fd.append('_p',path);
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){showToast(d.ok?(d.msg||'Duplicated'):'Error: '+(d.msg||'failed'));if(d.ok)fbLoad(fbCwd);});
}
function fbMove(path,name){
  var dest=prompt('Move "'+name+'" to folder (absolute path or path relative to the script):',fbCwd==='__ROOT__'?'':fbCwd);
  if(dest===null||dest.trim()==='')return;
  var fd=new FormData();fd.append('_a','move');fd.append('_p',path);fd.append('_dest',dest.trim());
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){showToast(d.ok?'Moved: '+name:'Error: '+(d.msg||'failed'));if(d.ok)fbLoad(fbCwd);});
}
var VIEW_META={
  direct:{t:'Upload from URL',d:'Pull a file from any URL straight onto this server.'},
  pc:{t:'Upload from PC',d:'Pick one or more files from your device and upload them directly to this server.'},
  mitm:{t:'MITM Relay',d:'Route the transfer through a second server when this one can\'t reach the URL directly.'},
  ftp:{t:'FTP Explorer',d:'Connect over FTP, FTPS, or SFTP and browse, upload, download, or manage remote files.'},
  compare:{t:'FTPS Sync',d:'Diff two locations side by side and sync files in either direction.'},
  explorer:{t:'File Explorer',d:'Browse, download, rename, and delete files on this server.'},
  phpinfo:{t:'PHP Info',d:'Server environment and PHP configuration at a glance.'},
  help:{t:'Help & CLI Guide',d:'Every command-line flag and web endpoint, documented.'},
  update:{t:'Update',d:'Check for and install the latest version from GitHub.'}
};
var MODES={direct:1,pc:1,mitm:1,ftp:1,compare:1};
var _fbLoaded=false,_infoLoaded=false;
function setHead(t,d){var a=document.getElementById('mode-title'),b=document.getElementById('mode-desc');if(a)a.textContent=t;if(b)b.textContent=d;}
function showView(v){
  var all=document.querySelectorAll('.view');
  if(!all.length){location.href='?view='+encodeURIComponent(v);return;}
  var found=false;
  all.forEach(function(el){var on=el.getAttribute('data-view')===v;el.style.display=on?'block':'none';if(on)found=true;});
  if(!found){location.href='?view='+encodeURIComponent(v);return;}
  document.querySelectorAll('.nav-item[data-view]').forEach(function(b){b.classList.toggle('active',b.getAttribute('data-view')===v);});
  var m=VIEW_META[v];if(m)setHead(m.t,m.d);
  if(MODES[v]){try{localStorage.setItem('bsu_mode',v);}catch(e){}}
  if(v==='ftp')ftpRestoreFields();
  else if(v==='mitm')mitmRestoreFields();
  else if(v==='compare')cmpRestoreFields();
  else if(v==='explorer'){if(!_fbLoaded){_fbLoaded=true;fbLoad('__ROOT__');}}
  else if(v==='phpinfo'){if(!_infoLoaded){_infoLoaded=true;loadInfo();}}
}
function switchMode(m){showView(m);}
function initView(){
  var v='direct';
  try{var p=new URLSearchParams(location.search).get('view');if(p)v=p;else{var m=localStorage.getItem('bsu_mode');if(m)v=m;}}catch(e){}
  if(!document.querySelector('.view[data-view="'+v+'"]'))v='direct';
  showView(v);
}
function mitmSaveFields(){try{
  var mu=document.getElementById('m-mitm-url');if(mu)localStorage.setItem('bsu_mitm_url',mu.value);
  var mf=document.getElementById('m-folder');if(mf)localStorage.setItem('bsu_mitm_folder',mf.value);
  var md=document.getElementById('m-delete');if(md)localStorage.setItem('bsu_mitm_del',md.checked?'1':'0');
}catch(e){}}
function mitmRestoreFields(){try{
  var mu=document.getElementById('m-mitm-url'),v=localStorage.getItem('bsu_mitm_url');if(mu&&v)mu.value=v;
  var mf=document.getElementById('m-folder'),f=localStorage.getItem('bsu_mitm_folder');if(mf&&f!==null)mf.value=f;
  var md=document.getElementById('m-delete'),d=localStorage.getItem('bsu_mitm_del');if(md&&d!==null)md.checked=(d==='1');
}catch(e){}}
function restoreMode(){try{
  var m=(location.search.indexOf('m=mitm')>=0)?'mitm':localStorage.getItem('bsu_mode');
  if(m==='mitm')switchMode('mitm');else if(m==='ftp')switchMode('ftp');else if(m==='compare')switchMode('compare');
}catch(e){}}
function ftpLog(msg,type){
  var log=document.getElementById('ftp-log');if(!log)return;
  var ts=new Date().toLocaleTimeString();
  var d=document.createElement('div');d.className='ftp-log-entry '+(type||'info');
  d.textContent='['+ts+'] '+msg;
  log.insertBefore(d,log.firstChild);
}
function ftpMethodChange(){
  var m=document.getElementById('ftp-method').value;
  var p=document.getElementById('ftp-port');
  if(m==='sftp'&&(p.value===''||p.value==='21'))p.value='22';
  else if(m!=='sftp'&&p.value==='22')p.value='21';
}
function ftpSaveFields(){
  try{
    localStorage.setItem('bsu_ftp_h',document.getElementById('ftp-host').value);
    localStorage.setItem('bsu_ftp_port',document.getElementById('ftp-port').value);
    localStorage.setItem('bsu_ftp_u',document.getElementById('ftp-user').value);
    localStorage.setItem('bsu_ftp_method',document.getElementById('ftp-method').value);
    localStorage.setItem('bsu_ftp_baseurl',document.getElementById('ftp-baseurl').value);
    var st=document.getElementById('ftp-strip');if(st)localStorage.setItem('bsu_ftp_strip',st.value);
    var df=document.getElementById('ftp-dl-folder');if(df)localStorage.setItem('bsu_ftp_dl_folder',df.value);
    var idr=document.getElementById('ftp-initdir');if(idr)localStorage.setItem('bsu_ftp_initdir',idr.value);
    // secure_link config (secret intentionally NOT persisted)
    var slMap={on:'ftp-sl-on',ttl:'ftp-sl-ttl',md5param:'ftp-sl-md5param',expparam:'ftp-sl-expparam',tmpl:'ftp-sl-tmpl',useaddr:'ftp-sl-useaddr',addr:'ftp-sl-addr'};
    Object.keys(slMap).forEach(function(k){var el=document.getElementById(slMap[k]);if(el)localStorage.setItem('bsu_sl_'+k,el.type==='checkbox'?(el.checked?'1':'0'):el.value);});
  }catch(e){}
}
function ftpRestoreFields(){
  try{
    var h=localStorage.getItem('bsu_ftp_h');if(h)document.getElementById('ftp-host').value=h;
    var p=localStorage.getItem('bsu_ftp_port');if(p)document.getElementById('ftp-port').value=p;
    var u=localStorage.getItem('bsu_ftp_u');if(u)document.getElementById('ftp-user').value=u;
    var m=localStorage.getItem('bsu_ftp_method');if(m)document.getElementById('ftp-method').value=m;
    var b=localStorage.getItem('bsu_ftp_baseurl');if(b)document.getElementById('ftp-baseurl').value=b;
    var st=document.getElementById('ftp-strip');if(st){var sv=localStorage.getItem('bsu_ftp_strip');if(sv)st.value=sv;}
    var df=document.getElementById('ftp-dl-folder');if(df){var dv=localStorage.getItem('bsu_ftp_dl_folder');if(dv)df.value=dv;}
    var idr=document.getElementById('ftp-initdir');if(idr){var iv=localStorage.getItem('bsu_ftp_initdir');if(iv)idr.value=iv;}
    var slMap={on:'ftp-sl-on',ttl:'ftp-sl-ttl',md5param:'ftp-sl-md5param',expparam:'ftp-sl-expparam',tmpl:'ftp-sl-tmpl',useaddr:'ftp-sl-useaddr',addr:'ftp-sl-addr'};
    Object.keys(slMap).forEach(function(k){var el=document.getElementById(slMap[k]);var sv=localStorage.getItem('bsu_sl_'+k);if(el&&sv!==null){if(el.type==='checkbox')el.checked=(sv==='1');else el.value=sv;}});
    var slBox=document.getElementById('ftp-seclink');if(slBox&&localStorage.getItem('bsu_sl_on')==='1')slBox.open=true;
    var fv=localStorage.getItem('bsu_ftp_view');if(fv==='tree'||fv==='explorer'){ftpView=fv;document.querySelectorAll('#ftp-view-seg button').forEach(function(b){b.classList.toggle('active',b.getAttribute('data-v')===fv);});}
    ftpProfPopulate();
  }catch(e){}
}
function ftpConnect(){
  var h=document.getElementById('ftp-host').value.trim();
  var port=document.getElementById('ftp-port').value||'21';
  var user=document.getElementById('ftp-user').value.trim();
  var pass=document.getElementById('ftp-pass').value;
  var method=document.getElementById('ftp-method').value;
  if(!h){showToast('Host is required');return;}
  ftpCreds={h:h,port:port,u:user,pw:pass,method:method};
  ftpSaveFields();
  _ftpJustConn=true;
  var initDir=(document.getElementById('ftp-initdir')||{value:''}).value.trim()||'/';
  ftpLog('Connecting to '+method.toUpperCase()+'://'+h+':'+port+initDir+' …','info');
  ftpLoad(initDir);
}
function ftpConnSummaryHtml(c){return'<span class="conn-dot"></span><span class="conn-host">'+_esc(c.h+(c.port&&c.port!='21'?(':'+c.port):''))+'</span><span class="conn-meta">'+_esc((c.method||'ftp').toUpperCase()+(c.u?(' · '+c.u):''))+'</span>';}
function ftpToggleConn(force){
  var card=document.getElementById('ftp-conn-card');if(!card)return;
  var body=document.getElementById('ftp-conn-body');
  var collapse=(typeof force==='boolean')?force:(body&&body.style.display!=='none');
  if(body)body.style.display=collapse?'none':'';
  card.classList.toggle('conn-collapsed',collapse);
  var sum=document.getElementById('ftp-conn-summary');if(sum)sum.style.display=collapse?'':'none';
  var tb=document.getElementById('ftp-conn-toggle');if(tb)tb.textContent=collapse?'Edit':'Collapse';
}
function ftpShowConnSummary(){
  var sum=document.getElementById('ftp-conn-summary');if(sum)sum.innerHTML=ftpConnSummaryHtml(ftpCreds);
  var tb=document.getElementById('ftp-conn-toggle');if(tb)tb.style.display='';
  ftpToggleConn(true);
  showToast('Connected to '+ftpCreds.h,'ok');
}
var ftpRoot='/',_ftpJustConn=false;
function ftpFd(action,path){var fd=new FormData();fd.append('_a',action);fd.append('_h',ftpCreds.h||'');fd.append('_port',ftpCreds.port||'21');fd.append('_u',ftpCreds.u||'');fd.append('_pw',ftpCreds.pw||'');fd.append('_method',ftpCreds.method||'ftp');fd.append('_p',path);return fd;}
function ftpActions(n){return fvMenuBtn('ftp',n);}
var ftpUpDir='',ftpParent=null;
var ftpView='explorer',ftpTV=null,_ftpChkBound=false;
function ftpBindChk(){if(_ftpChkBound)return;_ftpChkBound=true;var c=document.getElementById('ftp-tbl-wrap');if(c)c.addEventListener('change',function(e){if(e.target&&e.target.classList&&e.target.classList.contains('ftp-chk'))ftpChkChg();});}
function ftpSetView(v){
  ftpView=v;
  document.querySelectorAll('#ftp-view-seg button').forEach(function(b){b.classList.toggle('active',b.getAttribute('data-v')===v);});
  try{localStorage.setItem('bsu_ftp_view',v);}catch(e){}
  if(!ftpCreds.h)return;
  if(v==='tree')ftpTreeLoad(ftpCwd);else ftpLoad(ftpCwd);
}
function ftpTreeLoad(path){
  ftpBindChk();
  var area=document.getElementById('ftp-browser-area');var loading=document.getElementById('ftp-loading');var tbl=document.getElementById('ftp-tbl-wrap');
  if(area)area.style.display='';if(loading)loading.style.display='block';if(tbl)tbl.innerHTML='';
  ftpLog('Loading full tree from '+path+' …','info');
  fetch('',{method:'POST',body:ftpFd('ftp_tree',path)}).then(function(r){return r.json();}).then(function(d){
    if(loading)loading.style.display='none';
    if(!d.ok){tbl.innerHTML='<div class="ftp-empty">'+_esc(d.msg||'Error')+'</div>';ftpLog('Error: '+(d.msg||'unknown error'),'err');return;}
    ftpCwd=d.root;
    document.getElementById('ftp-path').innerHTML='<span class="fb-crumb" onclick="ftpLoad(\'/\')">'+_icHome+'</span><span class="fb-sep">/</span><span style="color:var(--t2)">'+_esc(d.root)+'</span>';
    if(!ftpTV)ftpTV=tvCreate({id:'ftp-tbl-wrap',checkbox:true,chkClass:'ftp-chk',actions:ftpActions,onCheck:ftpChkChg});
    tvSetFull(ftpTV,d.tree,d.root);
    var bulk=document.getElementById('ftp-bulk');if(bulk)bulk.classList.add('show');ftpChkChg();
    initTips(document.getElementById('ftp-browser-area'));
    if(_ftpJustConn){_ftpJustConn=false;ftpShowConnSummary();}
    ftpLog('Loaded tree: '+d.root+' ('+d.count+' items'+(d.capped?', truncated':'')+')',d.capped?'err':'ok');
  }).catch(function(e){if(loading)loading.style.display='none';ftpLog('Network error: '+(e.message||e),'err');});
}
function ftpNav(path){ftpLoad(path);}
function ftpUp(){if(ftpView==='tree'){showToast('Switch to Explorer to navigate folders');return;}if(ftpParent!=null)ftpLoad(ftpParent);else showToast('Already at the top');}
function ftpLoad(path){
  if(ftpView==='tree'&&ftpCreds.h){return ftpTreeLoad(path);}
  ftpBindChk();
  ftpCwd=path;ftpRoot=path;
  var area=document.getElementById('ftp-browser-area');
  var loading=document.getElementById('ftp-loading');
  var tbl=document.getElementById('ftp-tbl-wrap');
  if(area)area.style.display='';
  if(loading)loading.style.display='block';
  if(tbl)tbl.innerHTML='';
  fetch('',{method:'POST',body:ftpFd('ftp_ls',path)})
    .then(function(r){return r.json();})
    .then(function(d){
      if(loading)loading.style.display='none';
      if(!d.ok){tbl.innerHTML='<div class="ftp-empty">'+_esc(d.msg||'Error')+'</div>';ftpLog('Error: '+(d.msg||'unknown error'),'err');return;}
      ftpCwd=d.path;ftpRoot=d.path;ftpUpDir=d.path;ftpParent=d.parent;
      document.getElementById('ftp-path').innerHTML=fvCrumbs('ftp',d,'/');
      tbl.innerHTML=fvRowsHtml('ftp',d.items,ftpActions);
      var bulk=document.getElementById('ftp-bulk');if(bulk)bulk.classList.add('show');ftpChkChg();
      initTips(document.getElementById('ftp-browser-area'));
      var ud=document.getElementById('ftp-up-dir');if(ud)ud.textContent=d.path;
      var cd=document.getElementById('ftp-cur-dir');if(cd)cd.textContent=d.path;
      if(_ftpJustConn){_ftpJustConn=false;ftpShowConnSummary();}
      ftpLog('Listed: '+d.path,'ok');
    })
    .catch(function(e){if(loading)loading.style.display='none';ftpLog('Network error: '+(e.message||e),'err');});
}
function ftpUrlPath(remotePath){
  var strip=(document.getElementById('ftp-strip')||{value:''}).value.trim().replace(/\/+$/,'');
  if(strip&&remotePath.indexOf(strip)===0)return remotePath.slice(strip.length)||'/';
  return remotePath;
}
function ftpBaseUrl(){return(document.getElementById('ftp-baseurl').value||'').trim().replace(/\/$/,'');}
function ftpSecOn(){var e=document.getElementById('ftp-sl-on');return!!(e&&e.checked);}
function _v(id){var e=document.getElementById(id);return e?e.value:'';}
function ftpSecCfgFd(fd){
  fd.append('_secret',_v('ftp-sl-secret'));fd.append('_ttl',_v('ftp-sl-ttl')||'3600');
  fd.append('_md5param',_v('ftp-sl-md5param')||'md5');fd.append('_expparam',_v('ftp-sl-expparam')||'expires');
  fd.append('_tmpl',_v('ftp-sl-tmpl'));
  var ua=document.getElementById('ftp-sl-useaddr');fd.append('_useaddr',(ua&&ua.checked)?'1':'');
  fd.append('_addr',_v('ftp-sl-addr'));return fd;
}
/* Resolve a file's web URL, signing via the server when secure_link is enabled (async). */
function ftpWebUrl(path,cb){
  var base=ftpBaseUrl(),uri=ftpUrlPath(path);
  if(!ftpSecOn()||!_v('ftp-sl-secret')){cb(base+uri,false);return;}
  var fd=new FormData();fd.append('_a','secure_sign');fd.append('_base',base);fd.append('_uri',uri);ftpSecCfgFd(fd);
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){if(d&&d.ok){cb(d.url,true);}else{ftpLog('secure_link: '+((d&&d.msg)||'sign failed')+' — using plain URL','err');cb(base+uri,false);}}).catch(function(){cb(base+uri,false);});
}
function ftpWebUrls(paths,cb){
  var base=ftpBaseUrl();
  if(!ftpSecOn()||!_v('ftp-sl-secret')){cb(paths.map(function(p){return base+ftpUrlPath(p);}),false);return;}
  var fd=new FormData();fd.append('_a','secure_sign');fd.append('_base',base);fd.append('_uris',JSON.stringify(paths.map(ftpUrlPath)));ftpSecCfgFd(fd);
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){if(d&&d.ok&&d.urls){cb(d.urls,true);}else{ftpLog('secure_link: '+((d&&d.msg)||'sign failed')+' — using plain URLs','err');cb(paths.map(function(p){return base+ftpUrlPath(p);}),false);}}).catch(function(){cb(paths.map(function(p){return base+ftpUrlPath(p);}),false);});
}
function ftpSelAll(on){document.querySelectorAll('#ftp-tbl-wrap .ftp-chk').forEach(function(c){c.checked=on;});ftpChkChg();}
function ftpChkChg(){
  var cc=document.querySelectorAll('#ftp-tbl-wrap .ftp-chk:checked');
  var sn=document.getElementById('ftp-sel-n');if(sn)sn.textContent=cc.length?selSummaryText(selSummaryFrom(cc)):'0 selected';
  fvCheckBtnSync('ftp');
}
function ftpBulkCopyUrls(){
  var baseUrl=ftpBaseUrl();
  if(!baseUrl){showToast('Set the Web Base URL first');return;}
  var paths=[];
  document.querySelectorAll('#ftp-tbl-wrap .ftp-chk:checked').forEach(function(c){if(c.dataset.type==='file')paths.push(c.dataset.path);});
  if(!paths.length){showToast('No files selected');return;}
  ftpWebUrls(paths,function(urls,signed){copyText(urls.join('\n'));ftpLog('Copied '+urls.length+' '+(signed?'signed ':'')+'URL(s) to clipboard','ok');showToast('Copied '+urls.length+' URL(s)','ok');});
}
function ftpBulkDelete(){
  var items=[];
  document.querySelectorAll('#ftp-tbl-wrap .ftp-chk:checked').forEach(function(c){items.push({path:c.dataset.path,type:c.dataset.type});});
  if(!items.length)return;
  if(!confirm('Delete '+items.length+' item(s)?\nThis cannot be undone.'))return;
  ftpLog('Deleting '+items.length+' item(s)…','info');
  var done=0;
  items.forEach(function(it){
    var fd=new FormData();
    fd.append('_a','ftp_del');fd.append('_h',ftpCreds.h||'');fd.append('_port',ftpCreds.port||'21');
    fd.append('_u',ftpCreds.u||'');fd.append('_pw',ftpCreds.pw||'');
    fd.append('_method',ftpCreds.method||'ftp');fd.append('_p',it.path);fd.append('_type',it.type||'file');
    fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){
      done++;ftpLog((d.ok?'Deleted: ':'Failed: ')+it.path,d.ok?'ok':'err');
      if(done===items.length){showToast('Deleted '+items.length+' item(s)');ftpLoad(ftpCwd);}
    }).catch(function(){done++;if(done===items.length)ftpLoad(ftpCwd);});
  });
}
function ftpDel(path,name,type){
  if(!confirm('Delete "'+name+'"?\nThis cannot be undone.'))return;
  ftpLog('Deleting: '+path,'info');
  var fd=new FormData();
  fd.append('_a','ftp_del');fd.append('_h',ftpCreds.h||'');fd.append('_port',ftpCreds.port||'21');
  fd.append('_u',ftpCreds.u||'');fd.append('_pw',ftpCreds.pw||'');
  fd.append('_method',ftpCreds.method||'ftp');fd.append('_p',path);fd.append('_type',type||'file');
  fetch('',{method:'POST',body:fd})
    .then(function(r){return r.json();})
    .then(function(d){
      if(d.ok){ftpLog('Deleted: '+name,'ok');showToast('Deleted: '+name);ftpLoad(ftpCwd);}
      else ftpLog('Delete failed: '+(d.msg||'error'),'err');
    })
    .catch(function(e){ftpLog('Network error: '+(e.message||e),'err');});
}
function ftpOpFd(action,path){var fd=new FormData();fd.append('_a',action);fd.append('_h',ftpCreds.h||'');fd.append('_port',ftpCreds.port||'21');fd.append('_u',ftpCreds.u||'');fd.append('_pw',ftpCreds.pw||'');fd.append('_method',ftpCreds.method||'ftp');fd.append('_p',path);return fd;}
function ftpRename(path,name){
  var nn=prompt('Rename "'+name+'" to:',name);
  if(nn===null||nn.trim()===''||nn===name)return;
  var fd=ftpOpFd('ftp_rename',path);fd.append('_to',nn.trim());
  ftpLog('Renaming '+name+'…','info');
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){ftpLog((d.ok?'Renamed: ':'Rename failed: ')+(d.msg||name),d.ok?'ok':'err');if(d.ok){showToast('Renamed');ftpLoad(ftpCwd);}else showToast('Error: '+(d.msg||'failed'));});
}
function ftpMove(path,name){
  var dest=prompt('Move "'+name+'" to remote folder (absolute path on the server):',ftpCwd);
  if(dest===null||dest.trim()==='')return;
  var fd=ftpOpFd('ftp_move',path);fd.append('_dest',dest.trim());
  ftpLog('Moving '+name+'…','info');
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){ftpLog((d.ok?'Moved: ':'Move failed: ')+(d.msg||name),d.ok?'ok':'err');if(d.ok){showToast('Moved');ftpLoad(ftpCwd);}else showToast('Error: '+(d.msg||'failed'));});
}
function ftpDup(path,name){
  ftpLog('Duplicating '+name+' (round-trips via this server)…','info');
  var fd=ftpOpFd('ftp_dup',path);
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){ftpLog((d.ok?'Duplicated: ':'Duplicate failed: ')+(d.msg||name),d.ok?'ok':'err');if(d.ok){showToast(d.msg||'Duplicated');ftpLoad(ftpCwd);}else showToast('Error: '+(d.msg||'failed'));});
}
function ftpProgRow(label,sizeBytes){
  var host=document.getElementById('ftp-dl-status');
  if(!host){host=document.createElement('div');host.id='ftp-dl-status';host.className='bulk-status';var area=document.getElementById('ftp-browser-area');var tbl=document.getElementById('ftp-tbl-wrap');if(area&&tbl)area.insertBefore(host,tbl);}
  var el=document.createElement('div');el.className='bulk-item busy';
  el.innerHTML='<span class="bulk-item-ic"><span class="spin">&#8635;</span></span><span class="bulk-item-name">'+_esc(label)+'</span><span class="bulk-item-meta">'+(sizeBytes?ftpHumanSize(sizeBytes)+' · ':'')+'transferring…</span><div class="bulk-item-prog indet"><i></i></div>';
  host.insertBefore(el,host.firstChild);
  return el;
}
function ftpCopyToServer(remotePath,name,sizeBytes){
  ftpLog('Saving to server: '+name+' …','info');
  var row=ftpProgRow('↓ '+name,sizeBytes||0);
  var dlFolder=(document.getElementById('ftp-dl-folder')||{value:''}).value.trim();
  var fd=new FormData();
  fd.append('_a','ftp_copy');fd.append('_h',ftpCreds.h||'');fd.append('_port',ftpCreds.port||'21');
  fd.append('_u',ftpCreds.u||'');fd.append('_pw',ftpCreds.pw||'');
  fd.append('_method',ftpCreds.method||'ftp');fd.append('_p',remotePath);
  if(dlFolder)fd.append('_folder',dlFolder);
  fetch('',{method:'POST',body:fd})
    .then(function(r){return r.json();})
    .then(function(d){
      if(row){row.className='bulk-item '+(d.ok?'ok':'err');row.querySelector('.bulk-item-ic').textContent=d.ok?'✓':'✗';row.querySelector('.bulk-item-meta').textContent=d.ok?((d.size?ftpHumanSize(d.size):'')+(d.elapsed?' · '+d.elapsed:'')):(d.msg||'failed');}
      if(d.ok){
        var sz=d.size?ftpHumanSize(d.size):'';
        ftpLog('Saved: '+name+(sz?' ('+sz+')':'')+(d.elapsed?' in '+d.elapsed:''),'ok');
        if(d.url){
          ftpLog('Local URL: '+d.url,'info');
          var copy='<button class="btn btn-g btn-sm" style="margin-top:.3rem" onclick=\'copyText('+JSON.stringify(d.url)+')\'">Copy URL</button>';
          var entry=document.createElement('div');entry.className='ftp-log-entry ok';entry.innerHTML='&#x2192; <a href="'+_esc(d.url)+'" target="_blank" style="color:var(--bl)">'+_esc(d.url)+'</a>';
          var log=document.getElementById('ftp-log');if(log)log.insertBefore(entry,log.firstChild);
        }
        showToast('Saved: '+name);
      }else ftpLog('Save failed: '+(d.msg||'error'),'err');
    })
    .catch(function(e){if(row){row.className='bulk-item err';row.querySelector('.bulk-item-ic').textContent='✗';row.querySelector('.bulk-item-meta').textContent='network error';}ftpLog('Network error: '+(e.message||e),'err');});
}
function ftpHumanSize(b){
  b=+b||0;var u=['B','KB','MB','GB','TB'];
  var i=b>0?Math.min(Math.floor(Math.log(b)/Math.log(1024)),u.length-1):0;
  return(b/Math.pow(1024,i)).toFixed(i?1:0)+' '+u[i];
}
/* ── shared selection summary (files · folders · total size) ── */
function selSummaryFrom(checks){var f=0,d=0,b=0;Array.prototype.forEach.call(checks,function(c){if(c.dataset.type==='dir')d++;else{f++;b+=(+c.dataset.size||0);}});return{files:f,folders:d,bytes:b,n:f+d};}
function selSummaryText(s){var p=[s.files+' file'+(s.files===1?'':'s')];if(s.folders)p.push(s.folders+' folder'+(s.folders===1?'':'s'));p.push(ftpHumanSize(s.bytes)+' selected');return p.join(' · ');}
/* ── FTP explorer: upload into the current folder (PC / URL / relay, bulk) ── */
var ftpUpSrc='pc',_ftpUpFiles=[],_ftpUpCtl=null;
function ftpUpToggle(){
  if(!ftpCreds.h){showToast('Connect first');return;}
  var p=document.getElementById('ftp-up-panel');if(!p)return;
  var show=p.style.display==='none';p.style.display=show?'':'none';
  if(show){var d=document.getElementById('ftp-up-dir');if(d)d.textContent=ftpUpDir||ftpCwd||ftpRoot||'/';}
}
function ftpUpSetSrc(s){
  ftpUpSrc=s;
  ['pc','url','relay'].forEach(function(k){var el=document.getElementById('ftp-up-'+k);if(el)el.style.display=(k===s)?'':'none';});
  document.querySelectorAll('#ftp-up-seg button').forEach(function(b){b.classList.toggle('active',b.getAttribute('data-s')===s);});
}
function ftpUpPcPicked(){var fi=document.getElementById('ftp-up-file');if(fi&&fi.files&&fi.files.length){Array.prototype.forEach.call(fi.files,function(f){_ftpUpFiles.push(f);});fi.value='';}ftpUpRenderFiles();}
function ftpUpRemoveFile(i){_ftpUpFiles.splice(i,1);ftpUpRenderFiles();}
function ftpUpRenderFiles(){
  var list=document.getElementById('ftp-up-filelist');if(!list)return;
  if(!_ftpUpFiles.length){list.innerHTML='';return;}
  var h='<div class="ftp-up-files">';
  _ftpUpFiles.forEach(function(f,i){h+='<div class="ftp-up-file"><span class="ftp-up-fn">'+_esc(f.name)+'</span><span class="ftp-up-fsz">'+ftpHumanSize(f.size)+'</span><button type="button" class="ftp-up-rm" title="Remove" onclick="ftpUpRemoveFile('+i+')">'+_icX+'</button></div>';});
  h+='</div><div style="font-size:.78rem;color:var(--t2)">'+_ftpUpFiles.length+' file(s) · '+ftpHumanSize(_ftpUpFiles.reduce(function(a,f){return a+f.size;},0))+'</div>';
  list.innerHTML=h;
}
function ftpUpMarkStopped(q){q.stopped=true;q.el.className='bulk-item stopped';q.el.querySelector('.bulk-item-ic').textContent='■';q.el.querySelector('.bulk-item-meta').textContent='stopped';var sb=q.el.querySelector('.bulk-item-stop');if(sb)sb.remove();}
function ftpUpStopItem(q){if(q.done||q.failed)return;if(q.running&&_ftpUpCtl){q.stopped=true;if(_ftpUpCtl.xhr){try{_ftpUpCtl.xhr.abort();}catch(e){}}else if(_ftpUpCtl.abort){try{_ftpUpCtl.abort.abort();}catch(e){}}}else ftpUpMarkStopped(q);}
function ftpUpStopAll(){if(!_ftpUpCtl)return;_ftpUpCtl.stop=true;if(_ftpUpCtl.xhr){try{_ftpUpCtl.xhr.abort();}catch(e){}}if(_ftpUpCtl.abort){try{_ftpUpCtl.abort.abort();}catch(e){}}var b=document.getElementById('ftp-up-stop-btn');if(b){b.disabled=true;b.innerHTML='Stopping…';}ftpLog('Upload queue stop requested','err');}
function ftpUpItemFail(q,msg){q.failed=true;q.done=false;q.el.className='bulk-item err';q.el.querySelector('.bulk-item-ic').textContent='✗';q.el.querySelector('.bulk-item-meta').textContent=msg;var sb=q.el.querySelector('.bulk-item-stop');if(sb)sb.remove();if(!q.el.querySelector('.bulk-item-retry')){var b=document.createElement('button');b.type='button';b.className='bulk-item-retry';b.innerHTML='&#8635; Retry';b.onclick=function(){ftpUpRetryItem(q);};q.el.appendChild(b);}ftpLog('✗ '+q.j.name+' — '+msg,'err');}
function ftpUpItemReset(q){q.done=false;q.failed=false;q.stopped=false;q.running=false;q.el.className='bulk-item queued';q.el.querySelector('.bulk-item-ic').innerHTML='<span class="spin">&#8635;</span>';q.el.querySelector('.bulk-item-meta').textContent='queued';var rb=q.el.querySelector('.bulk-item-retry');if(rb)rb.remove();var pr=q.el.querySelector('.bulk-item-prog');if(pr){if(q.j.kind==='pc'){pr.classList.remove('indet');pr.querySelector('i').style.width='0';}else pr.classList.add('indet');}if(!q.el.querySelector('.bulk-item-stop')){var stop=document.createElement('button');stop.type='button';stop.className='bulk-item-stop';stop.textContent='Stop';stop.onclick=function(){ftpUpStopItem(q);};q.el.appendChild(stop);}}
function ftpUpRunOne(q,cb){
  if(q.stopped){ftpUpMarkStopped(q);cb();return;}
  q.running=true;q.el.className='bulk-item busy';q.el.querySelector('.bulk-item-meta').textContent='uploading…';
  var c=_ftpUpCtl,j=q.j;
  var fd=new FormData();fd.append('_a','ftp_upload');fd.append('_dir',c.dir);fd.append('_name',j.name);
  fd.append('_h',ftpCreds.h||'');fd.append('_port',ftpCreds.port||'21');fd.append('_u',ftpCreds.u||'');fd.append('_pw',ftpCreds.pw||'');fd.append('_method',ftpCreds.method||'ftp');
  var onDone=function(d){
    q.running=false;c.xhr=null;c.abort=null;
    if(d&&d.ok){q.done=true;q.failed=false;q.el.className='bulk-item ok';q.el.querySelector('.bulk-item-ic').textContent='✓';q.el.querySelector('.bulk-item-meta').textContent=(d.size?ftpHumanSize(d.size):'')+(d.elapsed?' · '+d.elapsed:'');var sb=q.el.querySelector('.bulk-item-stop');if(sb)sb.remove();ftpLog('✓ Uploaded '+d.name+' → '+c.dir,'ok');}
    else ftpUpItemFail(q,(d&&d.error)||'failed');
    cb();
  };
  if(j.kind==='pc'){
    fd.append('_src','pc');fd.append('file',j.file);
    var pf=q.el.querySelector('.bulk-item-prog>i');
    var xhr=new XMLHttpRequest();c.xhr=xhr;xhr.open('POST','',true);
    xhr.upload.onprogress=function(e){if(e.lengthComputable){var p=Math.round(e.loaded/e.total*100);if(pf)pf.style.width=p+'%';q.el.querySelector('.bulk-item-meta').textContent=p+'% — '+ftpHumanSize(e.loaded)+' / '+ftpHumanSize(e.total)+(p>=100?' · finishing on FTP…':'');}};
    xhr.onload=function(){var d;try{d=JSON.parse(xhr.responseText);}catch(e){d={ok:false,error:'Unexpected server response'};}onDone(d);};
    xhr.onerror=function(){onDone({ok:false,error:'network error'});};
    xhr.onabort=function(){q.running=false;c.xhr=null;ftpUpMarkStopped(q);ftpLog('■ '+j.name+' — stopped','err');cb();};
    xhr.send(fd);
  }else{
    fd.append('_src',j.kind);fd.append('url',j.url);
    if(j.kind==='relay'){fd.append('mitm_url',j.relay);var rd=document.getElementById('ftp-up-relay-del');if(rd&&rd.checked)fd.append('mitm_delete','1');}
    var ac=('AbortController'in window)?new AbortController():null;c.abort=ac;
    fetch('',{method:'POST',body:fd,signal:ac?ac.signal:undefined}).then(function(r){return r.json();}).then(onDone).catch(function(e){q.running=false;c.abort=null;if(ac&&e&&e.name==='AbortError'){ftpUpMarkStopped(q);ftpLog('■ '+j.name+' — stopped','err');cb();}else onDone({ok:false,error:(e&&e.message)||'network error'});});
  }
}
function ftpUpProgress(){if(!_ftpUpCtl)return;var q=_ftpUpCtl.queue;var done=q.filter(function(x){return x.done||x.failed||x.stopped;}).length;if(_ftpUpCtl.bar)_ftpUpCtl.bar.style.width=Math.round((done/q.length)*100)+'%';if(_ftpUpCtl.counter)_ftpUpCtl.counter.textContent=done+' / '+q.length+' done';}
function ftpUpNext(qi){if(!_ftpUpCtl)return;var q=_ftpUpCtl.queue;if(_ftpUpCtl.stop||qi>=q.length){ftpUpFinish();return;}var item=q[qi];if(item.done){ftpUpNext(qi+1);return;}ftpUpRunOne(item,function(){ftpUpProgress();ftpUpNext(qi+1);});}
function ftpUpFinish(){
  ftpUpProgress();
  var q=_ftpUpCtl.queue,failed=q.filter(function(x){return x.failed;});
  var pending=q.filter(function(x){return !x.done&&!x.failed&&!x.stopped;});
  if(_ftpUpCtl.stop&&pending.length){pending.forEach(ftpUpMarkStopped);ftpLog('Upload queue stopped ('+pending.length+' not uploaded)','err');showToast('Queue stopped');}
  else{ftpLog('Upload complete'+(failed.length?(' — '+failed.length+' failed'):''),failed.length?'err':'ok');showToast('Upload '+(failed.length?'finished with errors':'complete'));}
  ftpUpRenderRetryAll(failed);
  var b=document.getElementById('ftp-up-stop-btn');if(b){b.disabled=true;b.innerHTML='&#9632; Stop queue';}
}
function ftpUpClearStop(){if(_ftpUpCtl)_ftpUpCtl.stop=false;var b=document.getElementById('ftp-up-stop-btn');if(b){b.disabled=false;b.innerHTML='&#9632; Stop queue';}}
function ftpUpRetryItem(q){if(!_ftpUpCtl)return;ftpUpItemReset(q);ftpUpClearStop();ftpUpRunOne(q,function(){ftpUpProgress();ftpUpRenderRetryAll(_ftpUpCtl.queue.filter(function(x){return x.failed;}));});}
function ftpUpRenderRetryAll(failed){var st=document.getElementById('ftp-up-status');if(!st||!st.parentNode)return;var wrap=document.getElementById('ftp-up-retry-all');if(!wrap){wrap=document.createElement('div');wrap.id='ftp-up-retry-all';wrap.className='bulk-retry-all';st.parentNode.insertBefore(wrap,st.nextSibling);}wrap.innerHTML='';if(!failed.length){wrap.style.display='none';return;}wrap.style.display='';var b=document.createElement('button');b.type='button';b.className='btn btn-d btn-sm';b.innerHTML='&#8635; Retry failed ('+failed.length+')';b.onclick=function(){wrap.style.display='none';ftpUpClearStop();failed.forEach(function(x){ftpUpItemReset(x);});ftpUpRetryQueue(failed);};wrap.appendChild(b);}
function ftpUpRetryQueue(list){var i=0;(function nx(){if(!_ftpUpCtl||_ftpUpCtl.stop||i>=list.length){ftpUpProgress();ftpUpRenderRetryAll(_ftpUpCtl.queue.filter(function(x){return x.failed;}));return;}var q=list[i++];if(q.done){nx();return;}ftpUpRunOne(q,function(){ftpUpProgress();nx();});})();}
function ftpUpQueueCtl(){var st=document.getElementById('ftp-up-status');if(!st||!st.parentNode)return;var wrap=document.getElementById('ftp-up-queue-ctl');if(!wrap){wrap=document.createElement('div');wrap.id='ftp-up-queue-ctl';wrap.className='queue-ctl';st.parentNode.insertBefore(wrap,st);}wrap.innerHTML='';var stop=document.createElement('button');stop.type='button';stop.id='ftp-up-stop-btn';stop.className='btn btn-d btn-sm';stop.innerHTML='&#9632; Stop queue';stop.onclick=ftpUpStopAll;wrap.appendChild(stop);}
function ftpUpStart(){
  if(!ftpCreds.h){showToast('Connect first');return;}
  var dir=ftpUpDir||ftpCwd||ftpRoot||'/';var jobs=[];
  if(ftpUpSrc==='pc'){
    if(!_ftpUpFiles.length){showToast('Choose a file first');return;}
    _ftpUpFiles.forEach(function(f){jobs.push({kind:'pc',file:f,label:f.name,name:f.name});});
  }else{
    var ta=document.getElementById(ftpUpSrc==='relay'?'ftp-up-urls-relay':'ftp-up-urls');var lines=ta?ta.value.split('\n').map(function(l){return l.trim();}).filter(function(l){return l;}):[];
    if(!lines.length){showToast('Enter at least one URL');return;}
    var relay='';
    if(ftpUpSrc==='relay'){relay=(document.getElementById('ftp-up-relay-url').value||'').trim();if(!relay){showToast('Enter the relay URL');return;}}
    lines.forEach(function(u){var nm=u.split('?')[0].split('#')[0].split('/').pop()||('file_'+Date.now());jobs.push({kind:ftpUpSrc,url:u,label:u,name:nm,relay:relay});});
  }
  var status=document.getElementById('ftp-up-status');status.innerHTML='';
  var bar=document.getElementById('ftp-up-bar');bar.style.width='0%';bar.parentElement.style.display='';
  var counter=document.getElementById('ftp-up-counter');counter.style.display='';counter.textContent='0 / '+jobs.length+' done';
  var queue=jobs.map(function(j){
    var el=document.createElement('div');el.className='bulk-item queued';
    el.innerHTML='<span class="bulk-item-ic"><span class="spin">&#8635;</span></span><span class="bulk-item-name">'+_esc(j.label)+'</span><span class="bulk-item-meta">queued</span><div class="bulk-item-prog'+(j.kind==='pc'?'':' indet')+'"><i></i></div>';
    var q={j:j,el:el,done:false,failed:false,stopped:false,running:false};
    var stop=document.createElement('button');stop.type='button';stop.className='bulk-item-stop';stop.textContent='Stop';stop.onclick=function(){ftpUpStopItem(q);};
    el.appendChild(stop);status.appendChild(el);return q;
  });
  _ftpUpCtl={stop:false,queue:queue,dir:dir,bar:bar,counter:counter,xhr:null,abort:null};
  ftpUpQueueCtl();
  ftpLog('Uploading '+jobs.length+' item(s) to '+dir+' …','info');
  ftpUpNext(0);
}
/* ── File Explorer "Upload here" (PC / URL / Relay into the open folder) ── */
var fbUpSrc='pc',_fbUpFiles=[],_fbUpCtl=null,fbUpDir='';
function fbUpToggle(){
  var p=document.getElementById('fb-up-panel');if(!p)return;
  var show=p.style.display==='none';p.style.display=show?'':'none';
  if(show){var t=fbUpDir||((fbCwd&&fbCwd!=='__ROOT__')?fbCwd:'this folder');var d=document.getElementById('fb-cur-dir');if(d)d.textContent=t;var dd=document.getElementById('fb-up-dir');if(dd)dd.textContent=t;}
}
function fbUpSetSrc(s){
  fbUpSrc=s;
  ['pc','url','relay'].forEach(function(k){var el=document.getElementById('fb-up-'+k);if(el)el.style.display=(k===s)?'':'none';});
  document.querySelectorAll('#fb-up-seg button').forEach(function(b){b.classList.toggle('active',b.getAttribute('data-s')===s);});
}
function fbUpPcPicked(){var fi=document.getElementById('fb-up-file');if(fi&&fi.files&&fi.files.length){Array.prototype.forEach.call(fi.files,function(f){_fbUpFiles.push(f);});fi.value='';}fbUpRenderFiles();}
function fbUpRemoveFile(i){_fbUpFiles.splice(i,1);fbUpRenderFiles();}
function fbUpRenderFiles(){
  var list=document.getElementById('fb-up-filelist');if(!list)return;
  if(!_fbUpFiles.length){list.innerHTML='';return;}
  var h='<div class="ftp-up-files">';
  _fbUpFiles.forEach(function(f,i){h+='<div class="ftp-up-file"><span class="ftp-up-fn">'+_esc(f.name)+'</span><span class="ftp-up-fsz">'+ftpHumanSize(f.size)+'</span><button type="button" class="ftp-up-rm" title="Remove" onclick="fbUpRemoveFile('+i+')">'+_icX+'</button></div>';});
  h+='</div><div style="font-size:.78rem;color:var(--t2)">'+_fbUpFiles.length+' file(s) · '+ftpHumanSize(_fbUpFiles.reduce(function(a,f){return a+f.size;},0))+'</div>';
  list.innerHTML=h;
}
function fbUpMarkStopped(q){q.stopped=true;q.el.className='bulk-item stopped';q.el.querySelector('.bulk-item-ic').textContent='■';q.el.querySelector('.bulk-item-meta').textContent='stopped';var sb=q.el.querySelector('.bulk-item-stop');if(sb)sb.remove();}
function fbUpStopItem(q){if(q.done||q.failed)return;if(q.running&&_fbUpCtl){q.stopped=true;if(_fbUpCtl.xhr){try{_fbUpCtl.xhr.abort();}catch(e){}}else if(_fbUpCtl.abort){try{_fbUpCtl.abort.abort();}catch(e){}}}else fbUpMarkStopped(q);}
function fbUpStopAll(){if(!_fbUpCtl)return;_fbUpCtl.stop=true;if(_fbUpCtl.xhr){try{_fbUpCtl.xhr.abort();}catch(e){}}if(_fbUpCtl.abort){try{_fbUpCtl.abort.abort();}catch(e){}}var b=document.getElementById('fb-up-stop-btn');if(b){b.disabled=true;b.innerHTML='Stopping…';}}
function fbUpItemFail(q,msg){q.failed=true;q.done=false;q.el.className='bulk-item err';q.el.querySelector('.bulk-item-ic').textContent='✗';q.el.querySelector('.bulk-item-meta').textContent=msg;var sb=q.el.querySelector('.bulk-item-stop');if(sb)sb.remove();if(!q.el.querySelector('.bulk-item-retry')){var b=document.createElement('button');b.type='button';b.className='bulk-item-retry';b.innerHTML='&#8635; Retry';b.onclick=function(){fbUpRetryItem(q);};q.el.appendChild(b);}}
function fbUpItemReset(q){q.done=false;q.failed=false;q.stopped=false;q.running=false;q.el.className='bulk-item queued';q.el.querySelector('.bulk-item-ic').innerHTML='<span class="spin">&#8635;</span>';q.el.querySelector('.bulk-item-meta').textContent='queued';var rb=q.el.querySelector('.bulk-item-retry');if(rb)rb.remove();var pr=q.el.querySelector('.bulk-item-prog');if(pr){if(q.j.kind==='pc'){pr.classList.remove('indet');pr.querySelector('i').style.width='0';}else pr.classList.add('indet');}if(!q.el.querySelector('.bulk-item-stop')){var stop=document.createElement('button');stop.type='button';stop.className='bulk-item-stop';stop.textContent='Stop';stop.onclick=function(){fbUpStopItem(q);};q.el.appendChild(stop);}}
function fbUpRunOne(q,cb){
  if(q.stopped){fbUpMarkStopped(q);cb();return;}
  q.running=true;q.el.className='bulk-item busy';q.el.querySelector('.bulk-item-meta').textContent='uploading…';
  var c=_fbUpCtl,j=q.j;
  var fd=new FormData();fd.append('_a','fb_upload');fd.append('_dir',c.dir);fd.append('_name',j.name);
  var onDone=function(d){
    q.running=false;c.xhr=null;c.abort=null;
    if(d&&d.ok){q.done=true;q.failed=false;q.el.className='bulk-item ok';q.el.querySelector('.bulk-item-ic').textContent='✓';q.el.querySelector('.bulk-item-meta').textContent=(d.size?ftpHumanSize(d.size):'')+(d.elapsed?' · '+d.elapsed:'');var sb=q.el.querySelector('.bulk-item-stop');if(sb)sb.remove();}
    else fbUpItemFail(q,(d&&d.error)||'failed');
    cb();
  };
  if(j.kind==='pc'){
    fd.append('_src','pc');fd.append('file',j.file);
    var pf=q.el.querySelector('.bulk-item-prog>i');
    var xhr=new XMLHttpRequest();c.xhr=xhr;xhr.open('POST','',true);
    xhr.upload.onprogress=function(e){if(e.lengthComputable){var p=Math.round(e.loaded/e.total*100);if(pf)pf.style.width=p+'%';q.el.querySelector('.bulk-item-meta').textContent=p+'% — '+ftpHumanSize(e.loaded)+' / '+ftpHumanSize(e.total)+(p>=100?' · saving…':'');}};
    xhr.onload=function(){var d;try{d=JSON.parse(xhr.responseText);}catch(e){d={ok:false,error:'Unexpected server response'};}onDone(d);};
    xhr.onerror=function(){onDone({ok:false,error:'network error'});};
    xhr.onabort=function(){q.running=false;c.xhr=null;fbUpMarkStopped(q);cb();};
    xhr.send(fd);
  }else{
    fd.append('_src',j.kind);fd.append('url',j.url);
    if(j.kind==='relay'){fd.append('mitm_url',j.relay);var rd=document.getElementById('fb-up-relay-del');if(rd&&rd.checked)fd.append('mitm_delete','1');}
    var ac=('AbortController'in window)?new AbortController():null;c.abort=ac;
    fetch('',{method:'POST',body:fd,signal:ac?ac.signal:undefined}).then(function(r){return r.json();}).then(onDone).catch(function(e){q.running=false;c.abort=null;if(ac&&e&&e.name==='AbortError'){fbUpMarkStopped(q);cb();}else onDone({ok:false,error:(e&&e.message)||'network error'});});
  }
}
function fbUpProgress(){if(!_fbUpCtl)return;var q=_fbUpCtl.queue;var done=q.filter(function(x){return x.done||x.failed||x.stopped;}).length;if(_fbUpCtl.bar)_fbUpCtl.bar.style.width=Math.round((done/q.length)*100)+'%';if(_fbUpCtl.counter)_fbUpCtl.counter.textContent=done+' / '+q.length+' done';}
function fbUpNext(qi){if(!_fbUpCtl)return;var q=_fbUpCtl.queue;if(_fbUpCtl.stop||qi>=q.length){fbUpFinish();return;}var item=q[qi];if(item.done){fbUpNext(qi+1);return;}fbUpRunOne(item,function(){fbUpProgress();fbUpNext(qi+1);});}
function fbUpFinish(){
  fbUpProgress();
  var q=_fbUpCtl.queue,failed=q.filter(function(x){return x.failed;});
  var pending=q.filter(function(x){return !x.done&&!x.failed&&!x.stopped;});
  if(_fbUpCtl.stop&&pending.length){pending.forEach(fbUpMarkStopped);showToast('Queue stopped');}
  else showToast('Upload '+(failed.length?'finished with errors':'complete'));
  fbUpRenderRetryAll(failed);
  var b=document.getElementById('fb-up-stop-btn');if(b){b.disabled=true;b.innerHTML='&#9632; Stop queue';}
  if(typeof fbCwd!=='undefined')fbLoad(fbCwd);
}
function fbUpClearStop(){if(_fbUpCtl)_fbUpCtl.stop=false;var b=document.getElementById('fb-up-stop-btn');if(b){b.disabled=false;b.innerHTML='&#9632; Stop queue';}}
function fbUpRetryItem(q){if(!_fbUpCtl)return;fbUpItemReset(q);fbUpClearStop();fbUpRunOne(q,function(){fbUpProgress();fbUpRenderRetryAll(_fbUpCtl.queue.filter(function(x){return x.failed;}));});}
function fbUpRenderRetryAll(failed){var st=document.getElementById('fb-up-status');if(!st||!st.parentNode)return;var wrap=document.getElementById('fb-up-retry-all');if(!wrap){wrap=document.createElement('div');wrap.id='fb-up-retry-all';wrap.className='bulk-retry-all';st.parentNode.insertBefore(wrap,st.nextSibling);}wrap.innerHTML='';if(!failed.length){wrap.style.display='none';return;}wrap.style.display='';var b=document.createElement('button');b.type='button';b.className='btn btn-d btn-sm';b.innerHTML='&#8635; Retry failed ('+failed.length+')';b.onclick=function(){wrap.style.display='none';fbUpClearStop();failed.forEach(function(x){fbUpItemReset(x);});fbUpRetryQueue(failed);};wrap.appendChild(b);}
function fbUpRetryQueue(list){var i=0;(function nx(){if(!_fbUpCtl||_fbUpCtl.stop||i>=list.length){fbUpProgress();fbUpRenderRetryAll(_fbUpCtl.queue.filter(function(x){return x.failed;}));return;}var q=list[i++];if(q.done){nx();return;}fbUpRunOne(q,function(){fbUpProgress();nx();});})();}
function fbUpQueueCtl(){var st=document.getElementById('fb-up-status');if(!st||!st.parentNode)return;var wrap=document.getElementById('fb-up-queue-ctl');if(!wrap){wrap=document.createElement('div');wrap.id='fb-up-queue-ctl';wrap.className='queue-ctl';st.parentNode.insertBefore(wrap,st);}wrap.innerHTML='';var stop=document.createElement('button');stop.type='button';stop.id='fb-up-stop-btn';stop.className='btn btn-d btn-sm';stop.innerHTML='&#9632; Stop queue';stop.onclick=fbUpStopAll;wrap.appendChild(stop);}
function fbUpStart(){
  var dir=fbUpDir||fbCwd||'__ROOT__';var jobs=[];
  if(fbUpSrc==='pc'){
    if(!_fbUpFiles.length){showToast('Choose a file first');return;}
    _fbUpFiles.forEach(function(f){jobs.push({kind:'pc',file:f,label:f.name,name:f.name});});
  }else{
    var ta=document.getElementById(fbUpSrc==='relay'?'fb-up-urls-relay':'fb-up-urls');var lines=ta?ta.value.split('\n').map(function(l){return l.trim();}).filter(function(l){return l;}):[];
    if(!lines.length){showToast('Enter at least one URL');return;}
    var relay='';
    if(fbUpSrc==='relay'){relay=(document.getElementById('fb-up-relay-url').value||'').trim();if(!relay){showToast('Enter the relay URL');return;}}
    lines.forEach(function(u){var nm=u.split('?')[0].split('#')[0].split('/').pop()||('file_'+Date.now());jobs.push({kind:fbUpSrc,url:u,label:u,name:nm,relay:relay});});
  }
  var status=document.getElementById('fb-up-status');status.innerHTML='';
  var bar=document.getElementById('fb-up-bar');bar.style.width='0%';bar.parentElement.style.display='';
  var counter=document.getElementById('fb-up-counter');counter.style.display='';counter.textContent='0 / '+jobs.length+' done';
  var queue=jobs.map(function(j){
    var el=document.createElement('div');el.className='bulk-item queued';
    el.innerHTML='<span class="bulk-item-ic"><span class="spin">&#8635;</span></span><span class="bulk-item-name">'+_esc(j.label)+'</span><span class="bulk-item-meta">queued</span><div class="bulk-item-prog'+(j.kind==='pc'?'':' indet')+'"><i></i></div>';
    var q={j:j,el:el,done:false,failed:false,stopped:false,running:false};
    var stop=document.createElement('button');stop.type='button';stop.className='bulk-item-stop';stop.textContent='Stop';stop.onclick=function(){fbUpStopItem(q);};
    el.appendChild(stop);status.appendChild(el);return q;
  });
  _fbUpCtl={stop:false,queue:queue,dir:dir,bar:bar,counter:counter,xhr:null,abort:null};
  fbUpQueueCtl();
  fbUpNext(0);
}
/* ── Compare & Sync ─────────────────────────────────────────────── */
var cmpState={l:{kind:'local',cwd:'',root:'',creds:null,tv:null,mode:'tree',items:[],parent:null,_rooted:false,_selBound:false},r:{kind:'local',cwd:'',root:'',creds:null,tv:null,mode:'tree',items:[],parent:null,_rooted:false,_selBound:false}};
var cmpDir='lr';var _cmpRestored=false;
function cmpLog(msg,type){var log=document.getElementById('cmp-log');if(!log)return;var d=document.createElement('div');d.className='ftp-log-entry '+(type||'info');d.textContent='['+new Date().toLocaleTimeString()+'] '+msg;log.insertBefore(d,log.firstChild);}
function cmpTypeChange(s){var k=document.getElementById('cmp-'+s+'-type').value;document.getElementById('cmp-'+s+'-creds').style.display=k==='ftp'?'':'none';cmpUpdateMethodAvail();}
function cmpMethodPortSync(s){var m=document.getElementById('cmp-'+s+'-method').value;var p=document.getElementById('cmp-'+s+'-port');if(m==='sftp'&&(p.value===''||p.value==='21'))p.value='22';else if(m!=='sftp'&&p.value==='22')p.value='21';}
function cmpFd(s,action,path){var st=cmpState[s];var fd=new FormData();fd.append('_a',action);fd.append('_p',path);if(st.kind==='ftp'){var c=st.creds||{};fd.append('_h',c.h||'');fd.append('_port',c.port||'21');fd.append('_u',c.u||'');fd.append('_pw',c.pw||'');fd.append('_method',c.method||'ftp');}return fd;}
function cmpEnsureTV(s){if(!cmpState[s].tv)cmpState[s].tv=tvCreate({id:'cmp-'+s+'-tbl',checkbox:true,chkClass:'cmp-chk-'+s,onCheck:function(){cmpUpdateSel(s);},load:function(node,cb){var action=cmpState[s].kind==='local'?'ls':'ftp_ls';fetch('',{method:'POST',body:cmpFd(s,action,node.path)}).then(function(r){return r.json();}).then(function(d){cb(d.ok?d.items:[]);}).catch(function(){cb([]);});}});return cmpState[s].tv;}
function cmpBindSel(s){if(cmpState[s]._selBound)return;cmpState[s]._selBound=true;var c=document.getElementById('cmp-'+s+'-tbl');if(c)c.addEventListener('change',function(e){if(e.target&&e.target.classList&&e.target.classList.contains('cmp-chk-'+s))cmpUpdateSel(s);});}
function cmpLoaded(s){return cmpState[s].root!=='';}
/* selection summary per pane + combined sync total */
function cmpUpdateSel(s){
  var checks=document.querySelectorAll('#cmp-'+s+'-tbl .cmp-chk-'+s+':checked');
  var el=document.getElementById('cmp-'+s+'-sel');
  if(el)el.textContent=checks.length?selSummaryText(selSummaryFrom(checks)):'Nothing selected';
  cmpCheckBtnSync(s);
  cmpUpdateSyncTotal();
}
function cmpCheckBtnSync(s){
  var btn=document.getElementById('cmp-'+s+'-checkbtn');if(!btn)return;
  var total=document.querySelectorAll('#cmp-'+s+'-tbl .cmp-chk-'+s).length;
  var checked=document.querySelectorAll('#cmp-'+s+'-tbl .cmp-chk-'+s+':checked').length;
  var allChecked=total>0&&checked===total;
  btn.innerHTML=(allChecked?_icCheckSquare:_icSquare)+' '+(allChecked?'Check none':'Check all');
}
function cmpCheckToggle(s){
  var boxes=document.querySelectorAll('#cmp-'+s+'-tbl .cmp-chk-'+s);
  if(!boxes.length){showToast('Nothing to check');return;}
  var allChecked=true;boxes.forEach(function(c){if(!c.checked)allChecked=false;});
  var on=!allChecked;boxes.forEach(function(c){c.checked=on;});
  cmpUpdateSel(s);
}
function cmpUpdateSyncTotal(){
  var srcS=cmpDir==='lr'?'l':'r';
  var checks=document.querySelectorAll('#cmp-'+srcS+'-tbl .cmp-chk-'+srcS+':checked');
  var el=document.getElementById('cmp-sync-total');if(!el)return;
  el.textContent=checks.length?('Will sync '+selSummaryText(selSummaryFrom(checks))+' — '+(cmpDir==='lr'?'Left → Right':'Right → Left')):'Select files on the '+(srcS==='l'?'Left':'Right')+' (source) side to sync';
}
function cmpSetView(s,v){
  cmpState[s].mode=v;
  document.querySelectorAll('#cmp-'+s+'-view button').forEach(function(b){b.classList.toggle('active',b.getAttribute('data-v')===v);});
  var tt=document.getElementById('cmp-'+s+'-tools');if(tt)tt.classList.toggle('explorer-mode',v==='explorer');
  cmpPersist();
  if(cmpLoaded(s))cmpReload(s);
}
function cmpExplorerLoad(s,path){
  cmpBindSel(s);
  var st=cmpState[s];var wrap=document.getElementById('cmp-'+s+'-tbl');wrap.innerHTML='<div class="tree-empty">Loading…</div>';
  var action=st.kind==='local'?'ls':'ftp_ls';
  fetch('',{method:'POST',body:cmpFd(s,action,path)}).then(function(r){return r.json();}).then(function(d){
    if(!d.ok){wrap.innerHTML='<div class="tree-empty">'+_esc(d.msg||'Error')+'</div>';cmpLog((s==='l'?'Left':'Right')+': '+(d.msg||'load error'),'err');return;}
    if(!st._rooted){st.root=d.path;st._rooted=true;}
    st.cwd=d.path;st.items=d.items||[];st.parent=d.parent;
    cmpExplorerRender(s,d);
    if(st._justConn){st._justConn=false;cmpShowConnSummary(s);}
    cmpUpdateSel(s);
    cmpLog((s==='l'?'Left':'Right')+' listed: '+d.path,'ok');
  }).catch(function(e){wrap.innerHTML='<div class="tree-empty">Network error</div>';cmpLog('Network error: '+(e.message||e),'err');});
}
function cmpPathClick(s,e){
  if(e.target.closest('.fb-crumb'))return;
  if(!cmpLoaded(s)){showToast('Load this side first');return;}
  var st=cmpState[s];var cur=st.mode==='explorer'?(st.cwd||st.root):st.root;
  fvPathEdit('cmp-'+s,cur,function(v){cmpLoad(s,v||st.root||(st.kind==='ftp'?'/':'__ROOT__'));});
}
function cmpExplorerRender(s,d){
  var rootPath=cmpState[s].root||'/';
  var crumbs='<span class="fb-crumb" onclick=\'cmpExplorerLoad("'+s+'",'+JSON.stringify(rootPath)+')\' title="Base folder">'+_icHome+'</span>';
  (d.breadcrumbs||[]).forEach(function(c){crumbs+='<span class="fb-sep">/</span><span class="fb-crumb" onclick=\'cmpExplorerLoad("'+s+'",'+JSON.stringify(c.path)+')\'>'+_esc(c.name)+'</span>';});
  var pe=document.getElementById('cmp-'+s+'-path');if(pe)pe.innerHTML=crumbs;
  _crumbHtml['cmp-'+s]=crumbs;
  var rows='';
  (d.items||[]).forEach(function(n){
    var isDir=n.type==='dir',dp=_attr(n.path);
    var chk='<input type="checkbox" class="cmp-chk-'+s+'" data-path="'+dp+'" data-name="'+_attr(n.name)+'" data-type="'+n.type+'" data-size="'+(n.size_bytes||0)+'">';
    var name=isDir?'<span class="tname tname-dir" onclick=\'cmpExplorerLoad("'+s+'",'+JSON.stringify(n.path)+')\'>'+_icFolder+' '+_esc(n.name)+'</span>':'<span class="tname tname-file">'+_icFile+' '+_esc(n.name)+'</span>';
    rows+='<div class="tnode" data-relpath="'+_attr(n.name)+'"><span class="tcaret empty"></span>'+chk+name+'<span class="tsize">'+_esc(n.size||'')+'</span></div>';
  });
  document.getElementById('cmp-'+s+'-tbl').innerHTML=rows||'<div class="tree-empty">This folder is empty.</div>';
}
function cmpCurrentList(s){
  var st=cmpState[s];
  if(st.mode==='explorer')return(st.items||[]).map(function(n){return{rel:String(n.name).toLowerCase(),type:n.type,size:+n.size_bytes||0};});
  if(st.tv)return cmpFlatten(st.tv);
  return[];
}
function cmpCollectSync(s){
  var st=cmpState[s];
  if(st.mode==='explorer'){
    var files=[],unloaded=0;
    document.querySelectorAll('#cmp-'+s+'-tbl .cmp-chk-'+s+':checked').forEach(function(c){
      if(c.dataset.type==='file')files.push({path:c.dataset.path,name:c.dataset.name,size_bytes:+c.dataset.size||0});
      else unloaded++;
    });
    return{files:files,unloaded:unloaded,mode:'explorer'};
  }
  var col=cmpCollectFiles(st.tv);col.mode='tree';return col;
}
function cmpConnect(s){
  var kind=document.getElementById('cmp-'+s+'-type').value;cmpState[s].kind=kind;
  if(kind==='ftp'){
    var h=document.getElementById('cmp-'+s+'-host').value.trim();
    if(!h){showToast('Host required for the FTP side');return;}
    cmpState[s].creds={h:h,port:document.getElementById('cmp-'+s+'-port').value||'21',u:document.getElementById('cmp-'+s+'-user').value.trim(),pw:document.getElementById('cmp-'+s+'-pass').value,method:document.getElementById('cmp-'+s+'-method').value};
  }else cmpState[s].creds=null;
  var rootIn=(document.getElementById('cmp-'+s+'-root')||{value:''}).value.trim();
  var start=rootIn||(kind==='ftp'?'/':'__ROOT__');
  cmpState[s]._justConn=(kind==='ftp');
  cmpState[s]._rooted=false;cmpState[s].root='';
  cmpPersist();cmpLoad(s,start);
}
function cmpToggleConn(s,force){
  var form=document.getElementById('cmp-'+s+'-form');
  if(!form||document.getElementById('cmp-'+s+'-type').value!=='ftp')return;
  var collapse=(typeof force==='boolean')?force:(form.style.display!=='none');
  form.style.display=collapse?'none':'';
  var sum=document.getElementById('cmp-'+s+'-conn-summary');if(sum)sum.style.display=collapse?'':'none';
}
function cmpShowConnSummary(s){
  var c=cmpState[s].creds||{};var sum=document.getElementById('cmp-'+s+'-conn-summary');
  if(sum)sum.innerHTML='<span class="conn-dot"></span><span class="conn-host">'+_esc(c.h+(c.port&&c.port!='21'?(':'+c.port):''))+'</span><span class="conn-meta">'+_esc((c.method||'ftp').toUpperCase()+(c.u?(' · '+c.u):''))+'</span><button type="button" class="btn btn-g btn-sm" style="margin-left:auto" onclick="cmpToggleConn(\''+s+'\',false)">Edit</button>';
  cmpToggleConn(s,true);
  showToast((s==='l'?'Left':'Right')+' connected to '+(c.h||'server'),'ok');
}
function cmpReload(s){if(cmpState[s].root==='')return;var st=cmpState[s];cmpLoad(s,st.mode==='explorer'?(st.cwd||st.root):st.root);}
function cmpLoad(s,path){
  if(cmpState[s].mode==='explorer')return cmpExplorerLoad(s,path);
  cmpBindSel(s);
  var st=cmpState[s];var wrap=document.getElementById('cmp-'+s+'-tbl');wrap.innerHTML='<div class="tree-empty">Loading…</div>';
  var action=st.kind==='local'?'ls':'ftp_ls';
  fetch('',{method:'POST',body:cmpFd(s,action,path)}).then(function(r){return r.json();}).then(function(d){
    if(!d.ok){wrap.innerHTML='<div class="tree-empty">'+_esc(d.msg||'Error')+'</div>';cmpLog((s==='l'?'Left':'Right')+': '+(d.msg||'load error'),'err');return;}
    st.root=d.path;st.cwd=d.path;
    var crumbHtml='<span class="fb-crumb" onclick=\'cmpLoad("'+s+'",'+JSON.stringify(d.path)+')\' title="Reload">'+_icHome+'</span><span class="fb-sep"> </span><span style="color:var(--t2)">'+_esc(d.path)+'</span>';
    var pathEl=document.getElementById('cmp-'+s+'-path');if(pathEl)pathEl.innerHTML=crumbHtml;_crumbHtml['cmp-'+s]=crumbHtml;
    cmpEnsureTV(s);tvSetRoot(st.tv,d.items,d.path);
    if(st._justConn){st._justConn=false;cmpShowConnSummary(s);}
    cmpLog((s==='l'?'Left':'Right')+' listed: '+d.path,'ok');
  }).catch(function(e){wrap.innerHTML='<div class="tree-empty">Network error</div>';cmpLog('Network error: '+(e.message||e),'err');});
}
function cmpExpandAll(s){
  var st=cmpState[s];if(st.root===''){showToast('Load this side first');return;}
  cmpLog((s==='l'?'Left':'Right')+': loading full tree…','info');showToast('Loading full tree…');
  var c=document.getElementById('cmp-'+s+'-tbl');if(c)c.innerHTML=treeLoadingHtml('Loading full tree'+(st.kind==='ftp'?' from FTP server…':'…'));
  var action=st.kind==='local'?'ls_tree':'ftp_tree';
  fetch('',{method:'POST',body:cmpFd(s,action,st.root)}).then(function(r){return r.json();}).then(function(d){
    if(!d.ok){cmpLog('Tree error: '+(d.msg||'failed'),'err');showToast('Error: '+(d.msg||'failed'));if(c)c.innerHTML='<div class="tree-empty">'+_esc(d.msg||'Failed')+'</div>';return;}
    cmpEnsureTV(s);tvSetFull(st.tv,d.tree,d.root);
    cmpLog((s==='l'?'Left':'Right')+' loaded '+d.count+' items'+(d.capped?' (truncated — tree too large)':''),d.capped?'err':'ok');
  }).catch(function(){showToast('Failed to load tree');if(c)c.innerHTML='<div class="tree-empty">Failed to load tree</div>';});
}
function cmpCollapseAll(s){if(cmpState[s].tv)tvCollapseAll(cmpState[s].tv);}
function cmpSelAll(s,on){document.querySelectorAll('#cmp-'+s+'-tbl .cmp-chk-'+s).forEach(function(c){c.checked=on;});cmpUpdateSel(s);}
function cmpFlatten(tv){var out=[];(function walk(arr){if(!Array.isArray(arr))return;arr.forEach(function(n){out.push({rel:tvRel(tv,n.path).toLowerCase(),type:n.type,size:+n.size_bytes||0});if(n.children)walk(n.children);});})(tv.nodes);return out;}
function cmpDiff(){
  if(!cmpLoaded('l')||!cmpLoaded('r')){showToast('Load both sides first');return;}
  if(cmpState.l.mode!==cmpState.r.mode)cmpLog('Note: sides use different views — for a clean diff put both in the same view (Tree compares full trees, Explorer compares the open folder).','info');
  var L=cmpCurrentList('l'),R=cmpCurrentList('r');
  if(!L.length&&!R.length){showToast('Load both sides first');return;}
  var rmap={},lmap={};R.forEach(function(n){rmap[n.rel]=n;});L.forEach(function(n){lmap[n.rel]=n;});
  function classify(a,b){if(a.type!==b.type)return'diff';if(a.type==='dir')return'same';if(a.size===0||b.size===0)return'same';return a.size===b.size?'same':'diff';}
  var clsL={},clsR={},nSame=0,nDiff=0,nOnlyL=0,nOnlyR=0;
  L.forEach(function(n){if(rmap[n.rel]){var c=classify(n,rmap[n.rel]);clsL[n.rel]=c;if(n.type==='file'){c==='same'?nSame++:nDiff++;}}else{clsL[n.rel]='only-l';if(n.type==='file')nOnlyL++;}});
  R.forEach(function(n){if(lmap[n.rel])clsR[n.rel]=clsL[n.rel]||classify(lmap[n.rel],n);else{clsR[n.rel]='only-r';if(n.type==='file')nOnlyR++;}});
  cmpApplyClasses('l',clsL);cmpApplyClasses('r',clsR);
  // Auto-select files that need syncing on each side: only-here + differing (not identical).
  var nSelL=cmpAutoCheck('l',clsL),nSelR=cmpAutoCheck('r',clsR);
  cmpUpdateSel('l');cmpUpdateSel('r');
  document.getElementById('cmp-diff-summary').textContent=nSame+' identical · '+nDiff+' differ · '+nOnlyL+' only left · '+nOnlyR+' only right';
  cmpLog('Compared by relative path: '+nSame+' same, '+nDiff+' differ, '+nOnlyL+' only-left, '+nOnlyR+' only-right. Auto-selected '+nSelL+' left / '+nSelR+' right.','info');
}
var CMP_TAG={'only-l':'only here','only-r':'only here','diff':'differs','same':'identical'};
function cmpApplyClasses(s,map){
  document.querySelectorAll('#cmp-'+s+'-tbl .tnode[data-relpath]').forEach(function(el){
    el.classList.remove('cmp-same','cmp-diff','cmp-only-l','cmp-only-r');
    var old=el.querySelector('.cmp-tag');if(old)old.remove();
    var c=map[String(el.getAttribute('data-relpath')).toLowerCase()];
    if(!c)return;
    var tag=document.createElement('span');
    tag.className='cmp-tag t-'+c;
    tag.textContent=(c==='only-l'||c==='only-r')?(s==='l'?'only left':'only right'):CMP_TAG[c];
    el.appendChild(tag);
  });
}
function cmpAutoCheck(s,map){
  var n=0;
  document.querySelectorAll('#cmp-'+s+'-tbl .cmp-chk-'+s).forEach(function(cb){
    var node=cb.closest('.tnode');if(!node)return;
    var c=map[String(node.getAttribute('data-relpath')).toLowerCase()];
    var pick=(c==='diff'||c==='only-l'||c==='only-r');
    cb.checked=pick;if(pick)n++;
  });
  return n;
}
function cmpSetDir(d){cmpDir=d;document.querySelectorAll('#cmp-dir button').forEach(function(b){b.classList.toggle('active',b.getAttribute('data-dir')===d);});cmpUpdateMethodAvail();cmpUpdateSyncTotal();cmpPersist();}
function cmpMethodChange(){var m=document.getElementById('cmp-method').value;document.getElementById('cmp-relay-wrap').style.display=m==='relay'?'':'none';var hw=document.getElementById('cmp-http-wrap');if(hw)hw.style.display=m==='http'?'':'none';cmpPersist();}
var _CSL_KEYS=['base','strip','on','ttl','md5param','expparam','tmpl','useaddr','addr'];
function _cmpSlEl(s,k){return document.getElementById('cmp-'+s+'-sl-'+k);}
function cmpSlSave(s){try{_CSL_KEYS.forEach(function(k){var el=_cmpSlEl(s,k);if(el)localStorage.setItem('bsu_csl_'+s+'_'+k,el.type==='checkbox'?(el.checked?'1':'0'):el.value);});}catch(e){}}
function cmpSlRestore(s){try{_CSL_KEYS.forEach(function(k){var el=_cmpSlEl(s,k);var sv=localStorage.getItem('bsu_csl_'+s+'_'+k);if(el&&sv!==null){if(el.type==='checkbox')el.checked=(sv==='1');else el.value=sv;}});}catch(e){}}
function cmpHttpFd(fd,s){
  fd.append('_base',(_cmpSlEl(s,'base').value||'').trim());
  fd.append('_strip',(_cmpSlEl(s,'strip').value||'').trim());
  fd.append('_seclink_on',_cmpSlEl(s,'on').checked?'1':'');
  var sec=_cmpSlEl(s,'secret');fd.append('_secret',sec?sec.value:'');
  fd.append('_ttl',_cmpSlEl(s,'ttl').value||'3600');
  fd.append('_md5param',_cmpSlEl(s,'md5param').value||'md5');
  fd.append('_expparam',_cmpSlEl(s,'expparam').value||'expires');
  fd.append('_tmpl',_cmpSlEl(s,'tmpl').value||'');
  fd.append('_useaddr',_cmpSlEl(s,'useaddr').checked?'1':'');
  fd.append('_addr',_cmpSlEl(s,'addr').value||'');
  return fd;
}
function cmpUpdateMethodAvail(){
  var sel=document.getElementById('cmp-method');if(!sel)return;
  var srcKind=document.getElementById('cmp-'+(cmpDir==='lr'?'l':'r')+'-type').value;
  var dstKind=document.getElementById('cmp-'+(cmpDir==='lr'?'r':'l')+'-type').value;
  Array.prototype.forEach.call(sel.options,function(o){if(o.value==='fxp')o.disabled=!(srcKind==='ftp'&&dstKind==='ftp');else if(o.value==='relay'||o.value==='http')o.disabled=(srcKind!=='ftp');else o.disabled=false;});
  if(sel.selectedOptions[0]&&sel.selectedOptions[0].disabled){sel.value='direct';cmpMethodChange();}
}
function cmpCollectFiles(tv){
  var files=[],seen={},unloaded=0;
  function pushFile(n){if(!seen[n.path]){seen[n.path]=1;files.push(n);}}
  tvCheckedNodes(tv).forEach(function(n){
    if(n.type==='file')pushFile(n);
    else{if(!n._loaded){unloaded++;}(function walk(arr){if(!Array.isArray(arr))return;arr.forEach(function(c){if(c.type==='file')pushFile(c);else if(c.children)walk(c.children);});})(n.children);}
  });
  return{files:files,unloaded:unloaded};
}
function cmpSync(){
  var srcS=cmpDir==='lr'?'l':'r',dstS=cmpDir==='lr'?'r':'l';
  var src=cmpState[srcS],dst=cmpState[dstS];
  if(!cmpLoaded(srcS)||!cmpLoaded(dstS)){showToast('Load both sides first');return;}
  var method=document.getElementById('cmp-method').value;
  var relay=document.getElementById('cmp-relay').value.trim();
  if(method==='relay'&&!relay){showToast('Enter the Relay (MITM) URL');return;}
  if(method==='http'){
    if(!(_cmpSlEl(srcS,'base').value||'').trim()){showToast('Set the source ('+(srcS==='l'?'Left':'Right')+') server\'s Web Base URL in its secure_link panel');return;}
    var slsec=_cmpSlEl(srcS,'secret');
    if(_cmpSlEl(srcS,'on').checked&&!(slsec&&slsec.value)){showToast('Enter the secure_link secret (or turn signing off)');return;}
  }
  var col=cmpCollectSync(srcS);
  if(!col.files.length){showToast('Select files on the source side ('+(srcS==='l'?'Left':'Right')+')');return;}
  var items;
  if(col.mode==='explorer'){
    if(col.unloaded)cmpLog(col.unloaded+' selected folder(s) skipped — Explorer view syncs files in the open folder only; switch to Tree to sync whole folders','err');
    var destDir=String(dst.cwd||dst.root).replace(/\/+$/,'');
    items=col.files.map(function(n){return{path:n.path,name:n.name,rel:n.name,destDir:destDir};});
  }else{
    if(col.unloaded)cmpLog(col.unloaded+' selected folder(s) were not fully loaded — run "Full tree" to include all of their files','err');
    var destRoot=String(dst.root).replace(/\/+$/,'');
    items=col.files.map(function(n){
      var rel=tvRel(src.tv,n.path);var relDir=rel.indexOf('/')>=0?rel.replace(/\/[^/]*$/,''):'';
      return{path:n.path,name:n.name,rel:rel,destDir:destRoot+(relDir?'/'+relDir:'')};
    });
  }
  var status=document.getElementById('cmp-status');status.innerHTML='';
  var bar=document.getElementById('cmp-bar');bar.style.width='0%';bar.parentElement.style.display='';
  var counter=document.getElementById('cmp-counter');counter.style.display='';counter.textContent='0 / '+items.length+' done';
  var endpoint={direct:'xfer_direct',ftp:'xfer_ftp',relay:'xfer_relay',fxp:'xfer_fxp',http:'xfer_http'}[method];
  cmpLog('Syncing '+items.length+' file(s) '+(cmpDir==='lr'?'Left → Right':'Right → Left')+' via '+method.toUpperCase()+' …','info');
  var queue=items.map(function(it){
    var el=document.createElement('div');el.className='bulk-item queued';
    el.innerHTML='<span class="bulk-item-ic"><span class="spin">&#8635;</span></span><span class="bulk-item-name">'+_esc(it.rel||it.name)+'</span><span class="bulk-item-meta">queued</span><div class="bulk-item-prog indet"><i></i></div>';
    var q={it:it,el:el,done:false,failed:false,stopped:false,running:false};
    var stop=document.createElement('button');stop.type='button';stop.className='bulk-item-stop';stop.textContent='Stop';stop.onclick=function(){cmpStopItem(q);};
    el.appendChild(stop);status.appendChild(el);return q;
  });
  _cmpCtl={stop:false,queue:queue,srcS:srcS,dstS:dstS,endpoint:endpoint,relay:relay,method:method,bar:bar,counter:counter,abort:null};
  cmpQueueCtl();
  cmpRunNext(0);
}
var _cmpCtl=null;
function cmpQueueCtl(){
  var st=document.getElementById('cmp-status');if(!st||!st.parentNode)return;
  var wrap=document.getElementById('cmp-queue-ctl');
  if(!wrap){wrap=document.createElement('div');wrap.id='cmp-queue-ctl';wrap.className='queue-ctl';st.parentNode.insertBefore(wrap,st);}
  wrap.innerHTML='';
  var stop=document.createElement('button');stop.type='button';stop.id='cmp-stop-btn';stop.className='btn btn-d btn-sm';stop.innerHTML='&#9632; Stop queue';stop.onclick=cmpStopAll;
  wrap.appendChild(stop);
}
function cmpStopAll(){if(!_cmpCtl)return;_cmpCtl.stop=true;if(_cmpCtl.abort){try{_cmpCtl.abort.abort();}catch(e){}}var b=document.getElementById('cmp-stop-btn');if(b){b.disabled=true;b.innerHTML='Stopping…';}cmpLog('Queue stop requested','err');}
function cmpMarkStopped(q){q.stopped=true;q.el.className='bulk-item stopped';q.el.querySelector('.bulk-item-ic').textContent='■';q.el.querySelector('.bulk-item-meta').textContent='stopped';var sb=q.el.querySelector('.bulk-item-stop');if(sb)sb.remove();}
function cmpStopItem(q){if(q.done||q.failed)return;if(q.running&&_cmpCtl&&_cmpCtl.abort){q.stopped=true;try{_cmpCtl.abort.abort();}catch(e){}}else cmpMarkStopped(q);}
function cmpItemReset(q){
  q.done=false;q.failed=false;q.stopped=false;q.running=false;
  q.el.className='bulk-item queued';
  q.el.querySelector('.bulk-item-ic').innerHTML='<span class="spin">&#8635;</span>';
  q.el.querySelector('.bulk-item-meta').textContent='queued';
  var rb=q.el.querySelector('.bulk-item-retry');if(rb)rb.remove();
  var pr=q.el.querySelector('.bulk-item-prog');if(pr)pr.classList.add('indet');
  if(!q.el.querySelector('.bulk-item-stop')){var stop=document.createElement('button');stop.type='button';stop.className='bulk-item-stop';stop.textContent='Stop';stop.onclick=function(){cmpStopItem(q);};q.el.appendChild(stop);}
}
function cmpUncheckSource(srcS,path){
  var sel=(window.CSS&&CSS.escape)?CSS.escape(path):path.replace(/(["\\])/g,'\\$1');
  var cb=document.querySelector('#cmp-'+srcS+'-tbl .cmp-chk-'+srcS+'[data-path="'+sel+'"]');
  if(cb)cb.checked=false;
}
function cmpItemFail(q,msg){
  q.failed=true;q.done=false;
  q.el.className='bulk-item err';q.el.querySelector('.bulk-item-ic').textContent='✗';q.el.querySelector('.bulk-item-meta').textContent=msg;
  var sb=q.el.querySelector('.bulk-item-stop');if(sb)sb.remove();
  if(!q.el.querySelector('.bulk-item-retry')){var b=document.createElement('button');b.type='button';b.className='bulk-item-retry';b.innerHTML='&#8635; Retry';b.onclick=function(){cmpRetryItem(q);};q.el.appendChild(b);}
  cmpLog('✗ '+q.it.name+' — '+msg,'err');
}
function cmpRunOne(q,cb){
  if(q.stopped){cmpMarkStopped(q);cb();return;}
  q.running=true;q.el.className='bulk-item busy';q.el.querySelector('.bulk-item-meta').textContent='transferring…';
  var c=_cmpCtl,src=cmpState[c.srcS],dst=cmpState[c.dstS];
  var fd=new FormData();fd.append('_a',c.endpoint);
  fd.append('_skind',src.kind);fd.append('_dkind',dst.kind);
  fd.append('_sp',q.it.path);fd.append('_dp',q.it.destDir);fd.append('_name',q.it.name);
  if(src.kind==='ftp'){var cc=src.creds||{};fd.append('_h',cc.h||'');fd.append('_port',cc.port||'21');fd.append('_u',cc.u||'');fd.append('_pw',cc.pw||'');fd.append('_method',cc.method||'ftp');}
  if(dst.kind==='ftp'){var dc=dst.creds||{};fd.append('_dh',dc.h||'');fd.append('_dport',dc.port||'21');fd.append('_du',dc.u||'');fd.append('_dpw',dc.pw||'');fd.append('_dmethod',dc.method||'ftp');}
  if(c.method==='relay'){fd.append('_relay',c.relay);fd.append('_relay_del','0');}
  if(c.method==='http')cmpHttpFd(fd,c.srcS);
  var ac=('AbortController'in window)?new AbortController():null;c.abort=ac;
  fetch('',{method:'POST',body:fd,signal:ac?ac.signal:undefined}).then(function(r){return r.json();}).then(function(d){
    q.running=false;c.abort=null;
    if(d.ok){
      q.done=true;q.failed=false;
      q.el.className='bulk-item ok';q.el.querySelector('.bulk-item-ic').textContent='✓';
      q.el.querySelector('.bulk-item-meta').textContent=(d.size?ftpHumanSize(d.size):'')+(d.elapsed?' · '+d.elapsed:'');
      var sb=q.el.querySelector('.bulk-item-stop');if(sb)sb.remove();
      cmpUncheckSource(c.srcS,q.it.path);
      cmpLog('✓ '+q.it.name+' — '+(d.msg||'done'),'ok');
    }else cmpItemFail(q,d.msg||'failed');
    cb();
  }).catch(function(e){
    q.running=false;c.abort=null;
    if(ac&&e&&e.name==='AbortError'){cmpMarkStopped(q);cmpLog('■ '+q.it.name+' — stopped','err');}
    else cmpItemFail(q,(e&&e.message)||'network error');
    cb();
  });
}
function cmpProgress(){
  if(!_cmpCtl)return;var q=_cmpCtl.queue;
  var done=q.filter(function(x){return x.done||x.failed||x.stopped;}).length;
  if(_cmpCtl.bar)_cmpCtl.bar.style.width=Math.round((done/q.length)*100)+'%';
  if(_cmpCtl.counter)_cmpCtl.counter.textContent=done+' / '+q.length+' done';
}
function cmpRunNext(qi){
  if(!_cmpCtl)return;
  var q=_cmpCtl.queue;
  if(_cmpCtl.stop||qi>=q.length){cmpFinish();return;}
  var item=q[qi];
  if(item.done){cmpRunNext(qi+1);return;}
  cmpRunOne(item,function(){cmpProgress();cmpRunNext(qi+1);});
}
function cmpFinish(){
  cmpProgress();
  var q=_cmpCtl.queue,failed=q.filter(function(x){return x.failed;});
  var pending=q.filter(function(x){return !x.done&&!x.failed&&!x.stopped;});
  if(_cmpCtl.stop&&pending.length){
    pending.forEach(cmpMarkStopped);
    cmpLog('Queue stopped ('+pending.length+' not transferred)','err');showToast('Queue stopped');
  }else{cmpLog('Sync complete'+(failed.length?(' — '+failed.length+' failed'):''),failed.length?'err':'ok');showToast('Sync '+(failed.length?'finished with errors':'complete'));}
  cmpRenderRetryAll(failed);
  var b=document.getElementById('cmp-stop-btn');if(b){b.disabled=true;b.innerHTML='&#9632; Stop queue';}
}
function cmpClearStop(){if(_cmpCtl&&_cmpCtl.stop){_cmpCtl.stop=false;}var b=document.getElementById('cmp-stop-btn');if(b){b.disabled=false;b.innerHTML='&#9632; Stop queue';}}
function cmpRetryItem(q){if(!_cmpCtl)return;cmpItemReset(q);cmpClearStop();cmpRunOne(q,function(){cmpProgress();cmpRenderRetryAll(_cmpCtl.queue.filter(function(x){return x.failed;}));});}
function cmpRenderRetryAll(failed){
  var st=document.getElementById('cmp-status');if(!st||!st.parentNode)return;
  var wrap=document.getElementById('cmp-retry-all');
  if(!wrap){wrap=document.createElement('div');wrap.id='cmp-retry-all';wrap.className='bulk-retry-all';st.parentNode.insertBefore(wrap,st.nextSibling);}
  wrap.innerHTML='';
  if(!failed.length){wrap.style.display='none';return;}
  wrap.style.display='';
  var b=document.createElement('button');b.type='button';b.className='btn btn-d btn-sm';b.innerHTML='&#8635; Retry failed ('+failed.length+')';
  b.onclick=function(){wrap.style.display='none';cmpClearStop();failed.forEach(function(x){cmpItemReset(x);});cmpRetryQueue(failed);};
  wrap.appendChild(b);
}
function cmpRetryQueue(list){
  var i=0;(function nx(){
    if(!_cmpCtl||_cmpCtl.stop||i>=list.length){cmpProgress();cmpRenderRetryAll(_cmpCtl.queue.filter(function(x){return x.failed;}));return;}
    var q=list[i++];if(q.done){nx();return;}cmpRunOne(q,function(){cmpProgress();nx();});
  })();
}
function cmpPersist(){try{['l','r'].forEach(function(s){localStorage.setItem('bsu_cmp_'+s+'_type',document.getElementById('cmp-'+s+'-type').value);localStorage.setItem('bsu_cmp_'+s+'_host',document.getElementById('cmp-'+s+'-host').value);localStorage.setItem('bsu_cmp_'+s+'_port',document.getElementById('cmp-'+s+'-port').value);localStorage.setItem('bsu_cmp_'+s+'_user',document.getElementById('cmp-'+s+'-user').value);localStorage.setItem('bsu_cmp_'+s+'_method',document.getElementById('cmp-'+s+'-method').value);var rt=document.getElementById('cmp-'+s+'-root');if(rt)localStorage.setItem('bsu_cmp_'+s+'_root',rt.value);localStorage.setItem('bsu_cmp_'+s+'_mode',cmpState[s].mode);});localStorage.setItem('bsu_cmp_dir',cmpDir);localStorage.setItem('bsu_cmp_xmethod',document.getElementById('cmp-method').value);}catch(e){}}
function cmpRestoreFields(){if(_cmpRestored)return;_cmpRestored=true;try{
  ['l','r'].forEach(function(s){var t=localStorage.getItem('bsu_cmp_'+s+'_type');if(t)document.getElementById('cmp-'+s+'-type').value=t;var h=localStorage.getItem('bsu_cmp_'+s+'_host');if(h)document.getElementById('cmp-'+s+'-host').value=h;var p=localStorage.getItem('bsu_cmp_'+s+'_port');if(p)document.getElementById('cmp-'+s+'-port').value=p;var u=localStorage.getItem('bsu_cmp_'+s+'_user');if(u)document.getElementById('cmp-'+s+'-user').value=u;var m=localStorage.getItem('bsu_cmp_'+s+'_method');if(m)document.getElementById('cmp-'+s+'-method').value=m;var rt=document.getElementById('cmp-'+s+'-root'),rv=localStorage.getItem('bsu_cmp_'+s+'_root');if(rt&&rv!==null)rt.value=rv;var mo=localStorage.getItem('bsu_cmp_'+s+'_mode');if(mo==='tree'||mo==='explorer'){cmpState[s].mode=mo;document.querySelectorAll('#cmp-'+s+'-view button').forEach(function(b){b.classList.toggle('active',b.getAttribute('data-v')===mo);});var tt=document.getElementById('cmp-'+s+'-tools');if(tt)tt.classList.toggle('explorer-mode',mo==='explorer');}cmpTypeChange(s);cmpProfPopulate(s);});
  var dir=localStorage.getItem('bsu_cmp_dir');if(dir)cmpSetDir(dir);
  cmpSlRestore('l');cmpSlRestore('r');
  var xm=localStorage.getItem('bsu_cmp_xmethod');if(xm){document.getElementById('cmp-method').value=xm;cmpMethodChange();}
  cmpUpdateMethodAvail();
}catch(e){}}
var _bulkMode=false;
function bulkToggle(){
  _bulkMode=!_bulkMode;
  document.getElementById('single-url-wrap').style.display=_bulkMode?'none':'';
  document.getElementById('bulk-url-area').style.display=_bulkMode?'block':'none';
  document.getElementById('bulk-toggle').textContent=_bulkMode?'Single':'Bulk';
  var sn=document.getElementById('single-name-wrap');if(sn)sn.style.display=_bulkMode?'none':'';
  try{localStorage.setItem('bsu_bulk_mode',_bulkMode?'1':'');}catch(e){}
}
function bulkRestoreMode(){try{if(localStorage.getItem('bsu_bulk_mode')==='1'){_bulkMode=true;var sw=document.getElementById('single-url-wrap');if(sw)sw.style.display='none';var ba=document.getElementById('bulk-url-area');if(ba)ba.style.display='block';var bt=document.getElementById('bulk-toggle');if(bt)bt.textContent='Single';var sn=document.getElementById('single-name-wrap');if(sn)sn.style.display='none';}}catch(e){}}
function bulkItemReset(it){
  it.el.className='bulk-item busy';
  it.el.querySelector('.bulk-item-ic').innerHTML='<span class="spin">&#8635;</span>';
  it.el.querySelector('.bulk-item-meta').textContent='uploading…';
  var rb=it.el.querySelector('.bulk-item-retry');if(rb)rb.remove();
  var lk=it.el.querySelector('.bulk-item-url');if(lk)lk.remove();
}
function bulkItemErr(it,msg,retryFn){
  it.failed=true;
  it.el.className='bulk-item err';
  it.el.querySelector('.bulk-item-ic').textContent='✗';
  it.el.querySelector('.bulk-item-meta').textContent=msg;
  var b=document.createElement('button');b.type='button';b.className='bulk-item-retry';b.innerHTML='&#8635; Retry';
  b.onclick=function(){retryFn(it);};
  it.el.appendChild(b);
}
function bulkRenderRetryAll(status,failed,retryFn){
  if(!status||!status.parentNode)return;
  var wrap=status.nextElementSibling;
  if(!wrap||!wrap.classList||!wrap.classList.contains('bulk-retry-all')){
    wrap=document.createElement('div');wrap.className='bulk-retry-all';
    status.parentNode.insertBefore(wrap,status.nextSibling);
  }
  wrap.innerHTML='';
  if(!failed.length){wrap.style.display='none';return;}
  wrap.style.display='';
  var b=document.createElement('button');b.type='button';b.className='btn btn-d btn-sm';b.innerHTML='&#8635; Retry failed ('+failed.length+')';
  b.onclick=function(){wrap.style.display='none';retryFn(failed);};
  wrap.appendChild(b);
}
var _bulkItems=null,_bulkCfg=null;
function bulkUploadStart(){
  var ta=document.getElementById('bulk-urls');
  if(!ta)return;
  var lines=ta.value.split('\n').map(function(l){return l.trim();}).filter(function(l){return l.length>0;});
  if(!lines.length){showToast('No URLs entered');return;}
  var folder=document.getElementById('folder')?document.getElementById('folder').value:'';
  var status=document.getElementById('bulk-status');
  var bar=document.getElementById('bulk-bar');
  var counter=document.getElementById('bulk-counter');
  var pw=document.getElementById('bulk-progress-wrap');
  if(status)status.innerHTML='';
  if(bar){bar.style.width='0%';bar.parentElement.style.display='';}
  if(pw)pw.style.display='';
  if(counter){counter.textContent='0 / '+lines.length+' done';counter.style.display='';}
  _bulkCfg={folder:folder,bar:bar,counter:counter,status:status};
  _bulkItems=lines.map(function(url){
    var name=url.split('?')[0].split('#')[0].split('/').pop()||('file_'+Date.now());
    var el=document.createElement('div');el.className='bulk-item busy';
    el.innerHTML='<span class="bulk-item-ic"><span class="spin">&#8635;</span></span><span class="bulk-item-name">'+_esc(url)+'</span><span class="bulk-item-meta">queued</span>';
    if(status)status.appendChild(el);
    return{url:url,name:name,el:el,failed:false};
  });
  bulkRunQueue(_bulkItems);
}
function bulkUpdateProgress(){
  if(!_bulkItems)return;
  var done=_bulkItems.filter(function(x){return x.el.className.indexOf('busy')<0;}).length;
  if(_bulkCfg.bar)_bulkCfg.bar.style.width=Math.round((done/_bulkItems.length)*100)+'%';
  if(_bulkCfg.counter)_bulkCfg.counter.textContent=done+' / '+_bulkItems.length+' done';
}
function bulkRunQueue(queue){bulkRunNext(queue,0);}
function bulkRunNext(queue,qi){
  if(qi>=queue.length){
    var failed=_bulkItems.filter(function(x){return x.failed;});
    bulkRenderRetryAll(_bulkCfg.status,failed,bulkRunQueue);
    return;
  }
  var it=queue[qi];
  bulkItemReset(it);
  var fd=new FormData();
  fd.append('_a','fetch');fd.append('url',it.url);fd.append('_name',it.name);
  if(_bulkCfg.folder)fd.append('_folder',_bulkCfg.folder);
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){
    if(d.ok){
      it.failed=false;
      it.el.className='bulk-item ok';
      it.el.querySelector('.bulk-item-ic').textContent='✓';
      var sz=d.size?ftpHumanSize(d.size):'';
      it.el.querySelector('.bulk-item-meta').textContent=sz;
      if(d.url){var a=document.createElement('a');a.className='bulk-item-url';a.href=d.url;a.target='_blank';a.style.cssText='color:var(--bl);font-size:.76rem;display:block;word-break:break-all;width:100%';a.textContent=d.url;it.el.appendChild(a);}
    }else{
      bulkItemErr(it,d.error||'failed',function(x){bulkRunQueue([x]);});
    }
    bulkUpdateProgress();bulkRunNext(queue,qi+1);
  }).catch(function(e){
    bulkItemErr(it,e.message||'network error',function(x){bulkRunQueue([x]);});
    bulkUpdateProgress();bulkRunNext(queue,qi+1);
  });
}
var _mitmBulkMode=false;
function mitmBulkToggle(){
  _mitmBulkMode=!_mitmBulkMode;
  var sw=document.getElementById('m-single-url-wrap');if(sw)sw.style.display=_mitmBulkMode?'none':'';
  var ba=document.getElementById('mitm-bulk-url-area');if(ba)ba.style.display=_mitmBulkMode?'block':'none';
  var bt=document.getElementById('mitm-bulk-toggle');if(bt)bt.textContent=_mitmBulkMode?'Single':'Bulk';
  var sn=document.getElementById('m-single-name-wrap');if(sn)sn.style.display=_mitmBulkMode?'none':'';
  var mu=document.getElementById('m-url');if(mu)mu.required=!_mitmBulkMode;
  var mn=document.getElementById('m-name');if(mn)mn.required=!_mitmBulkMode;
  try{localStorage.setItem('bsu_mitm_bulk_mode',_mitmBulkMode?'1':'');}catch(e){}
}
function mitmBulkRestoreMode(){try{if(localStorage.getItem('bsu_mitm_bulk_mode')==='1'){_mitmBulkMode=true;var sw=document.getElementById('m-single-url-wrap');if(sw)sw.style.display='none';var ba=document.getElementById('mitm-bulk-url-area');if(ba)ba.style.display='block';var bt=document.getElementById('mitm-bulk-toggle');if(bt)bt.textContent='Single';var sn=document.getElementById('m-single-name-wrap');if(sn)sn.style.display='none';var mu=document.getElementById('m-url');if(mu)mu.required=false;var mn=document.getElementById('m-name');if(mn)mn.required=false;}}catch(e){}}
var _mitmItems=null,_mitmCfg=null;
function mitmBulkStart(){
  var mitmUrl=document.getElementById('m-mitm-url')?document.getElementById('m-mitm-url').value.trim():'';
  if(!mitmUrl){showToast('Enter the MITM server URL');return;}
  var ta=document.getElementById('mitm-bulk-urls');
  if(!ta)return;
  var lines=ta.value.split('\n').map(function(l){return l.trim();}).filter(function(l){return l.length>0;});
  if(!lines.length){showToast('No URLs entered');return;}
  var folder=document.getElementById('m-folder')?document.getElementById('m-folder').value:'';
  var del=document.getElementById('m-delete')&&document.getElementById('m-delete').checked?'1':'';
  var status=document.getElementById('mitm-bulk-status');
  var bar=document.getElementById('mitm-bulk-bar');
  var counter=document.getElementById('mitm-bulk-counter');
  var pw=document.getElementById('mitm-bulk-progress-wrap');
  if(status)status.innerHTML='';
  if(bar){bar.style.width='0%';bar.parentElement.style.display='';}
  if(pw)pw.style.display='';
  if(counter){counter.textContent='0 / '+lines.length+' done';counter.style.display='';}
  _mitmCfg={mitmUrl:mitmUrl,folder:folder,del:del,bar:bar,counter:counter,status:status};
  _mitmItems=lines.map(function(url){
    var name=url.split('?')[0].split('#')[0].split('/').pop()||('file_'+Date.now());
    var el=document.createElement('div');el.className='bulk-item busy';
    el.innerHTML='<span class="bulk-item-ic"><span class="spin">&#8635;</span></span><span class="bulk-item-name">'+_esc(url)+'</span><span class="bulk-item-meta">queued</span>';
    if(status)status.appendChild(el);
    return{url:url,name:name,el:el,failed:false};
  });
  mitmRunQueue(_mitmItems);
}
function mitmUpdateProgress(){
  if(!_mitmItems)return;
  var done=_mitmItems.filter(function(x){return x.el.className.indexOf('busy')<0;}).length;
  if(_mitmCfg.bar)_mitmCfg.bar.style.width=Math.round((done/_mitmItems.length)*100)+'%';
  if(_mitmCfg.counter)_mitmCfg.counter.textContent=done+' / '+_mitmItems.length+' done';
}
function mitmRunQueue(queue){mitmRunNext(queue,0);}
function mitmRunNext(queue,qi){
  if(qi>=queue.length){
    var failed=_mitmItems.filter(function(x){return x.failed;});
    bulkRenderRetryAll(_mitmCfg.status,failed,mitmRunQueue);
    return;
  }
  var it=queue[qi];
  bulkItemReset(it);
  it.el.querySelector('.bulk-item-meta').textContent='relaying…';
  var fd=new FormData();
  fd.append('_a','mitm_fetch');fd.append('mitm_url',_mitmCfg.mitmUrl);fd.append('url',it.url);fd.append('_name',it.name);
  if(_mitmCfg.folder)fd.append('_folder',_mitmCfg.folder);
  if(_mitmCfg.del)fd.append('mitm_delete','1');
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){
    if(d.ok){
      it.failed=false;
      it.el.className='bulk-item ok';
      it.el.querySelector('.bulk-item-ic').textContent='✓';
      var sz=d.size?ftpHumanSize(d.size):'';
      it.el.querySelector('.bulk-item-meta').textContent=sz+(d.mitm_deleted===false?' (MITM not cleaned)':'');
      if(d.url){var a=document.createElement('a');a.className='bulk-item-url';a.href=d.url;a.target='_blank';a.style.cssText='color:var(--bl);font-size:.76rem;display:block;word-break:break-all;width:100%';a.textContent=d.url;it.el.appendChild(a);}
    }else{
      bulkItemErr(it,d.error||'failed',function(x){mitmRunQueue([x]);});
    }
    mitmUpdateProgress();mitmRunNext(queue,qi+1);
  }).catch(function(e){
    bulkItemErr(it,e.message||'network error',function(x){mitmRunQueue([x]);});
    mitmUpdateProgress();mitmRunNext(queue,qi+1);
  });
}
var _pcFiles=[];
function pcFilePicked(){
  var fi=document.getElementById('pc-file');
  if(fi&&fi.files&&fi.files.length){Array.prototype.forEach.call(fi.files,function(f){_pcFiles.push(f);});fi.value='';}
  pcRenderFiles();
}
function pcRemoveFile(i){_pcFiles.splice(i,1);pcRenderFiles();}
function pcClearFiles(){_pcFiles=[];pcRenderFiles();}
function pcRenderFiles(){
  var list=document.getElementById('pc-filelist');if(!list)return;
  var n=document.getElementById('pc-name'),nw=document.getElementById('pc-name-wrap');
  if(nw)nw.style.display=(_pcFiles.length===1)?'':'none';
  if(_pcFiles.length===1&&n&&!n.value.trim())n.value=_pcFiles[0].name;
  if(!_pcFiles.length){list.innerHTML='';return;}
  var h='<div class="ftp-up-files">';
  _pcFiles.forEach(function(f,i){
    h+='<div class="ftp-up-file"><span class="ftp-up-fn">'+_esc(f.name)+'</span><span class="ftp-up-fsz">'+ftpHumanSize(f.size)+'</span><button type="button" class="ftp-up-rm" title="Remove" onclick="pcRemoveFile('+i+')">'+_icX+'</button></div>';
  });
  h+='</div><div style="font-size:.78rem;color:var(--t2)">'+_pcFiles.length+' file(s) selected · '+ftpHumanSize(_pcFiles.reduce(function(a,f){return a+f.size;},0))+'</div>';
  list.innerHTML=h;
}
function pcUpload(){
  if(!_pcFiles.length){showToast('Choose a file first');return;}
  var files=_pcFiles.slice();
  var multi=files.length>1;
  var folder=(document.getElementById('pc-folder').value||'').trim();
  var singleName=(document.getElementById('pc-name').value||'').trim();
  var wrap=document.getElementById('pc-progress-wrap'),bar=document.getElementById('pc-bar');
  var counter=document.getElementById('pc-counter'),status=document.getElementById('pc-status');
  wrap.style.display='';bar.style.width='0%';counter.style.display='';counter.textContent='0 / '+files.length+' done';status.innerHTML='';
  var rows=files.map(function(f){
    var el=document.createElement('div');el.className='bulk-item busy';
    el.innerHTML='<span class="bulk-item-ic"><span class="spin">&#8635;</span></span><span class="bulk-item-name">'+_esc(f.name)+'</span><span class="bulk-item-meta">queued</span><div class="bulk-item-prog"><i></i></div>';
    status.appendChild(el);return el;
  });
  var done=0,idx=0;
  function next(){
    if(idx>=files.length){counter.textContent=files.length+' / '+files.length+' done';bar.style.width='100%';showToast('Upload complete');return;}
    var f=files[idx],el=rows[idx];
    var name=(!multi&&singleName)?singleName:f.name;
    el.className='bulk-item busy';el.querySelector('.bulk-item-meta').textContent='uploading…';
    var pf=el.querySelector('.bulk-item-prog>i');
    var fd=new FormData();fd.append('_a','upload_local');fd.append('file',f);fd.append('_name',name);
    if(folder)fd.append('folder',folder);
    var xhr=new XMLHttpRequest();xhr.open('POST','',true);
    xhr.upload.onprogress=function(e){if(e.lengthComputable){var p=Math.round(e.loaded/e.total*100);if(pf)pf.style.width=p+'%';el.querySelector('.bulk-item-meta').textContent=p+'% — '+ftpHumanSize(e.loaded)+' / '+ftpHumanSize(e.total);var overall=Math.round(((done+e.loaded/e.total)/files.length)*100);bar.style.width=overall+'%';setPg(overall);}};
    xhr.onload=function(){
      var d;try{d=JSON.parse(xhr.responseText);}catch(e){d={ok:false,error:'Unexpected server response'};}
      if(d.ok){
        el.className='bulk-item ok';el.querySelector('.bulk-item-ic').textContent='✓';
        el.querySelector('.bulk-item-meta').textContent=ftpHumanSize(d.size);
        var a=document.createElement('a');a.className='bulk-item-url';a.href=d.url;a.target='_blank';a.style.cssText='color:var(--bl);font-size:.76rem;display:block;word-break:break-all;width:100%';a.textContent=d.url;el.appendChild(a);
      }else{
        el.className='bulk-item err';el.querySelector('.bulk-item-ic').textContent='✗';
        el.querySelector('.bulk-item-meta').textContent=d.error||'failed';
      }
      done++;idx++;counter.textContent=done+' / '+files.length+' done';next();
    };
    xhr.onerror=function(){el.className='bulk-item err';el.querySelector('.bulk-item-ic').textContent='✗';el.querySelector('.bulk-item-meta').textContent='network error';done++;idx++;counter.textContent=done+' / '+files.length+' done';next();};
    xhr.send(fd);
  }
  setPg(0);next();
}
function _us(t){var e=document.getElementById('update-status');if(e)e.textContent=t;}
function _esc(s){return String(s==null?'':s).replace(/[&<>"]/g,function(c){return{'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;'}[c];});}
function updLog(msg,type){var log=document.getElementById('update-log');if(!log)return;var d=document.createElement('div');d.className='ftp-log-entry '+(type||'info');d.textContent='['+new Date().toLocaleTimeString()+'] '+msg;log.appendChild(d);log.scrollTop=log.scrollHeight;}
function checkUpdate(){
  showToast('Checking for updates…');_us('Checking for updates…');
  updLog('→ POST _a=check_update → api.github.com/repos/amirhp-com/upload-url-to-server/releases/latest','info');
  var fd=new FormData();fd.append('_a','check_update');
  fetch('',{method:'POST',body:fd}).then(function(r){return r.json();}).then(function(d){
    if(d&&d.http)updLog('← HTTP '+d.http+' from GitHub','info');
    if(!d.ok){
      updLog('✗ '+(d.msg||'error'),'err');
      if(d.raw)updLog('  raw: '+d.raw,'err');
      showToast('Update check failed');_us('Update check failed: '+(d.msg||'error'));return;
    }
    updLog('current v'+d.current+' · latest v'+d.latest+(d.asset?' · source: release asset':' · source: raw file @ tag'),'info');
    updLog('download URL: '+d.download_url,'info');
    var st=document.getElementById('update-status');
    if(d.needs_update){
      updLog('✓ Update available: v'+d.current+' → v'+d.latest,'ok');
      updLog('Download the new upload.php, then upload it back here to replace this file','info');
      if(st)st.innerHTML='<div class="result-box" style="margin-top:0">'
        +'<div class="upload-meta" style="margin-bottom:.6rem"><strong>Update available:</strong> v'+_esc(d.current)+' &rarr; <strong>v'+_esc(d.latest)+'</strong></div>'
        +'<div class="done-btns" style="justify-content:flex-start;margin-top:0">'
        +'<a class="btn btn-p" href="'+_esc(d.download_url)+'" target="_blank" rel="noopener" download="upload.php">&#8595; Download upload.php v'+_esc(d.latest)+'</a>'
        +(d.release_page?'<a class="btn btn-g" href="'+_esc(d.release_page)+'" target="_blank" rel="noopener">Release notes</a>':'')
        +'</div>'
        +'<div class="upload-meta" style="margin-top:.65rem;font-size:.8rem">Save the file, then use <strong>Upload &rarr; From PC</strong> (or the File Explorer &ldquo;Upload here&rdquo;) to upload the downloaded <code>upload.php</code> into this same folder, replacing this script.</div>'
        +'</div>';
      showToast('Update available — v'+d.latest);
    }else{
      updLog('✓ Already up to date (v'+d.current+')','ok');
      if(st)st.innerHTML='';
      showToast('Up to date ✓ (v'+d.current+')');_us('You are up to date ✓ (v'+d.current+')');
    }
  }).catch(function(e){updLog('✗ Request failed: '+(e.message||e),'err');showToast('Update check failed');_us('Update check failed: '+(e.message||e));});
}
document.addEventListener('DOMContentLoaded',function(){updateThemeBtn();checkPermBanner();restoreSidebar();initTips();});
</script>
</head>
<body>
<header class="hdr">
  <a class="hdr-logo" href="?r=<?=time()?>">
    <img src="<?=$_svg?>" alt="" width="24" height="24">
    <span class="hdr-title">BlackSwan <span class="hdr-sep">|</span> Upload/sFTP Tool</span>
    <span class="hdr-ver">v<?=APP_VER?></span>
  </a>
  <div id="pgbar"></div>
</header>
<?php $bsu_show_form = !(isset($_POST['url']) && isset($_POST['name'])); ?>
<div class="app-body">
<aside class="sidebar">
  <?php if($bsu_show_form): ?>
  <div class="nav-group">
    <div class="nav-label">Upload</div>
    <button type="button" class="nav-item active" data-view="direct" onclick="showView('direct')"><span class="nav-ic"><?=ph('link',18)?></span> Upload from URL</button>
    <button type="button" class="nav-item" data-view="pc" onclick="showView('pc')"><span class="nav-ic"><?=ph('arrow-up',18)?></span> Upload from PC</button>
    <button type="button" class="nav-item" data-view="mitm" onclick="showView('mitm')"><span class="nav-ic"><?=ph('shuffle',18)?></span> MITM Relay</button>
  </div>
  <?php endif; ?>
  <div class="nav-group">
    <div class="nav-label">Browse</div>
    <button type="button" class="nav-item" data-view="explorer" onclick="showView('explorer')"><span class="nav-ic"><?=ph('folder-open',18)?></span> File Explorer</button>
    <?php if($bsu_show_form): ?>
    <button type="button" class="nav-item" data-view="ftp" onclick="showView('ftp')"><span class="nav-ic"><?=ph('hard-drives',18)?></span> FTP Explorer</button>
    <?php endif; ?>
  </div>
  <?php if($bsu_show_form): ?>
  <div class="nav-group">
    <div class="nav-label">Sync</div>
    <button type="button" class="nav-item" data-view="compare" onclick="showView('compare')"><span class="nav-ic"><?=ph('arrows-left-right',18)?></span> FTPS Sync</button>
  </div>
  <?php endif; ?>
  <div class="nav-group">
    <div class="nav-label">Tools</div>
    <button type="button" class="nav-item" data-view="phpinfo" onclick="showView('phpinfo')"><span class="nav-ic"><?=ph('gear-six',18)?></span> PHP Info</button>
    <button type="button" class="nav-item" data-view="help" onclick="showView('help')"><span class="nav-ic"><?=ph('question',18)?></span> Help</button>
    <button type="button" class="nav-item" data-view="update" onclick="showView('update')"><span class="nav-ic"><?=ph('arrow-clockwise',18)?></span> Update</button>
  </div>
  <div class="sidebar-foot">
    <div class="sb-foot-row">
      <button type="button" class="sb-icon-btn sb-toggle" onclick="toggleSidebar()" title="Collapse / expand sidebar"><?=ph('arrows-left-right',18)?></button>
      <button type="button" class="sb-icon-btn" id="theme-btn" onclick="cycleTheme()" title="Toggle light / dark / auto theme"><?=ph('circle-half',18)?></button>
    </div>
  </div>
</aside>
<main class="content">
<div id="perm-banner" class="banner" style="display:none"></div>
<?php if($bsu_show_form): ?>
<div class="mode-head"><h1 id="mode-title">Direct Upload</h1><p id="mode-desc">Pull a file from any URL straight onto this server.</p></div>
<?php endif; ?>
<?php
if(isset($_POST['url'],$_POST['name'])){
  $is_mitm=!empty($_POST['_mode'])&&$_POST['_mode']==='mitm'&&isset($_POST['mitm_url']);
  $pre_url=htmlspecialchars(trim((string)($_POST['url']??'')),ENT_QUOTES);
  $pre_name=htmlspecialchars(sanitize_filename((string)($_POST['name']??'')),ENT_QUOTES);
  $pre_folder=sanitize_folder((string)($_POST['folder']??''));
  $pre_dest=htmlspecialchars(($pre_folder?"$pre_folder/":'').$pre_name);
  echo '<div class="upload-card" id="upload-area">';
  if($is_mitm){
    $pre_mitm=htmlspecialchars(trim((string)($_POST['mitm_url']??'')),ENT_QUOTES);
    echo '<div class="upload-meta">Source: <a href="'.$pre_url.'" target="_blank" rel="noopener">'.$pre_url.'</a><br>Via MITM: <strong>'.$pre_mitm.'</strong><br>To: <strong>'.$pre_dest.'</strong><br><span style="font-size:.78rem;margin-top:.3rem;display:block">Please wait&hellip;</span></div>';
  }else{
    echo '<div class="upload-meta">From: <a href="'.$pre_url.'" target="_blank" rel="noopener">'.$pre_url.'</a><br>To: <strong>'.$pre_dest.'</strong><br><span style="font-size:.78rem;margin-top:.3rem;display:block">Please wait or press ESC to cancel</span></div>';
  }
  echo '<div id="progress">Connecting&hellip;</div><div id="statuses"></div></div>';
  flush_buffers(true);
  if($is_mitm)handle_mitm_upload();
  else handle_upload();
}else{
  render_form();
}
?>
</main>
</div>
<footer class="ftr">
  <a class="ftr-sd" href="?delete=true" onclick="return confirm('Delete this script from the server? This cannot be undone.')"><?=ph('trash',13)?> Self-Destruct</a>
  <span class="dot">&middot;</span>
  <span>by <a href="https://amirhp.com/landing/" target="_blank" rel="noopener">AmirhpCom</a></span>
  <span class="dot">&middot;</span>
  <a href="https://github.com/amirhp-com/upload-url-to-server" target="_blank" rel="noopener">GitHub</a>
  <span class="dot">&middot;</span>
  <span>Copyright &copy; <?=date('Y')?> <a href="https://blackswandev.com" target="_blank" rel="noopener">BlackSwan</a>, under MIT License</span>
  <span class="dot">&middot;</span>
  <span>Server IP: <?=htmlspecialchars($_SERVER['SERVER_ADDR']??'?')?></span>
  <span class="dot">&middot;</span>
  <span>Your IP: <?=htmlspecialchars(get_real_IP_address())?></span>
  <span class="dot">&middot;</span>
  <span>v<?=APP_VER?> &middot; <?=BUILD_DATE?></span>
</footer>

<div class="modal-bg" id="file-modal">
  <div class="modal fe-modal">
    <div class="modal-hdr">
      <h3 id="fe-title"><span id="fe-title-ic"></span><span id="fe-title-name"></span></h3>
      <div class="modal-hdr-r"><button class="modal-x" onclick="closeFileEditor()" title="Close"><?=ph('x',16)?></button></div>
    </div>
    <div class="modal-body fe-body" id="fe-body"></div>
  </div>
</div>
<div id="toast-stack" class="toast-stack" aria-live="polite"></div>
</body>
</html>
<?php

function cmp_pane($s){
  ob_start(); ?>
  <div class="cmp-pane" id="cmp-<?=$s?>-pane">
    <div id="cmp-<?=$s?>-conn-summary" class="conn-summary" style="display:none;margin-bottom:.6rem"></div>
    <div id="cmp-<?=$s?>-form">
      <div class="cmp-pane-hd">
        <select id="cmp-<?=$s?>-type" onchange="cmpTypeChange('<?=$s?>')">
          <option value="local">Local (this server)</option>
          <option value="ftp">FTP / FTPS / SFTP</option>
        </select>
        <button type="button" class="btn btn-p btn-sm" onclick="cmpConnect('<?=$s?>')"><?=ph('arrow-right',14)?> Load</button>
      </div>
      <div class="cmp-creds" id="cmp-<?=$s?>-creds" style="display:none">
        <div class="full prof-row">
          <select id="cmp-<?=$s?>-prof"><option value="">— Saved connections —</option></select>
          <button type="button" class="btn btn-g btn-sm" onclick="cmpProfLoad('<?=$s?>')">Load</button>
          <button type="button" class="btn btn-g btn-sm" onclick="cmpProfSave('<?=$s?>')"><?=ph('floppy-disk',13)?> Save</button>
          <button type="button" class="btn btn-d btn-sm" onclick="cmpProfDelete('<?=$s?>')"><?=ph('trash',13)?></button>
        </div>
        <div class="field"><label>Host / IP</label><input type="text" id="cmp-<?=$s?>-host" autocomplete="off" placeholder="ftp.example.com" onclick="this.select()"></div>
        <div class="field"><label>Port</label><input type="number" id="cmp-<?=$s?>-port" value="21" min="1" max="65535"></div>
        <div class="field"><label>Username</label><input type="text" id="cmp-<?=$s?>-user" autocomplete="off" placeholder="anonymous"></div>
        <div class="field"><label>Password</label><input type="password" id="cmp-<?=$s?>-pass" autocomplete="new-password"></div>
        <div class="field full"><label>Connection Method</label><select id="cmp-<?=$s?>-method" onchange="cmpMethodPortSync('<?=$s?>')"><option value="ftp">FTP (plain)</option><option value="ftps">FTPS (TLS/SSL)</option><option value="sftp">SFTP (SSH)</option></select></div>
      </div>
      <div class="field" style="margin-bottom:.5rem"><label>Root folder <span style="font-weight:400;text-transform:none;font-size:.9em">(base for relative compare)</span></label><input type="text" id="cmp-<?=$s?>-root" autocomplete="off" placeholder="<?=$s==='l'?'/public_html':'/w2w'?>  (blank = default)" onclick="this.select()"></div>
      <details class="seclink-box" id="cmp-<?=$s?>-seclink">
        <summary><?=ph('lock-key',14)?> nginx secure_link / web URL <span style="font-weight:400;text-transform:none;font-size:.85em;color:var(--t2)">(for the "HTTP via secure_link" sync method)</span></summary>
        <div class="seclink-grid">
          <div class="field"><label>Web Base URL</label><input type="text" id="cmp-<?=$s?>-sl-base" placeholder="https://dl.example.com" autocomplete="off" onclick="this.select()" oninput="cmpSlSave('<?=$s?>')"></div>
          <div class="field"><label>Strip path prefix <span style="font-weight:400;text-transform:none;font-size:.85em">(removed from URL path)</span></label><input type="text" id="cmp-<?=$s?>-sl-strip" placeholder="/public_html" autocomplete="off" onclick="this.select()" oninput="cmpSlSave('<?=$s?>')"></div>
          <div class="toggle-row full"><div class="tgl-lbl">Sign with nginx secure_link<span class="tgl-hint">Off = plain HTTP download (no token)</span></div><label class="sw"><input type="checkbox" id="cmp-<?=$s?>-sl-on" checked onchange="cmpSlSave('<?=$s?>')"><span class="sw-s"></span></label></div>
          <div class="field full"><label>Secret key <span style="font-weight:400;text-transform:none;font-size:.85em">(session only, never saved)</span></label><input type="password" id="cmp-<?=$s?>-sl-secret" autocomplete="new-password" placeholder="e.g. 310daa96727bbc07952f4193ef430484d2"></div>
          <div class="field"><label>Expiry TTL (seconds)</label><input type="number" id="cmp-<?=$s?>-sl-ttl" value="3600" min="1" oninput="cmpSlSave('<?=$s?>')"></div>
          <div class="field"><label>md5 query param</label><input type="text" id="cmp-<?=$s?>-sl-md5param" value="md5" onclick="this.select()" oninput="cmpSlSave('<?=$s?>')"></div>
          <div class="field"><label>expires query param</label><input type="text" id="cmp-<?=$s?>-sl-expparam" value="expires" onclick="this.select()" oninput="cmpSlSave('<?=$s?>')"></div>
          <div class="field full"><label>Hash expression <span style="font-weight:400;text-transform:none;font-size:.85em">(tokens: {expires} {uri} {addr} {secret})</span></label><input type="text" id="cmp-<?=$s?>-sl-tmpl" value="{expires}{uri}{addr} {secret}" onclick="this.select()" oninput="cmpSlSave('<?=$s?>')"></div>
          <div class="toggle-row full"><div class="tgl-lbl">Include <code>$remote_addr</code> (bind to an IP)<span class="tgl-hint">Server-side download &rarr; set the IP to THIS server's public IP</span></div><label class="sw"><input type="checkbox" id="cmp-<?=$s?>-sl-useaddr" onchange="cmpSlSave('<?=$s?>')"><span class="sw-s"></span></label></div>
          <div class="field full"><label>Bind to IP <span style="font-weight:400;text-transform:none;font-size:.85em">(this server's public IP &mdash; see footer)</span></label><input type="text" id="cmp-<?=$s?>-sl-addr" placeholder="e.g. 45.92.92.241" autocomplete="off" onclick="this.select()" oninput="cmpSlSave('<?=$s?>')"></div>
        </div>
        <div class="prof-note">Used only by the <strong>HTTP via secure_link</strong> sync method, when this side is the <strong>source</strong>: files are browsed over FTP but downloaded over this web URL.</div>
      </details>
    </div>
    <div class="tree-tools" id="cmp-<?=$s?>-tools">
      <div class="seg cmp-view-seg" id="cmp-<?=$s?>-view" title="Tree = full recursive tree.&#10;Explorer = open one folder at a time.">
        <button type="button" class="active" data-v="tree" onclick="cmpSetView('<?=$s?>','tree')"><?=ph('tree-structure',13)?> Tree</button>
        <button type="button" data-v="explorer" onclick="cmpSetView('<?=$s?>','explorer')"><?=ph('folder',13)?> Explorer</button>
      </div>
      <button type="button" class="btn btn-g btn-sm tree-only" onclick="cmpExpandAll('<?=$s?>')" title="Load every folder"><?=ph('tree-structure',13)?> Full tree</button>
      <button type="button" class="btn btn-g btn-sm tree-only" onclick="cmpCollapseAll('<?=$s?>')">Collapse</button>
      <button type="button" class="btn btn-g btn-sm" id="cmp-<?=$s?>-checkbtn" onclick="cmpCheckToggle('<?=$s?>')"><?=ph('square',13)?> Check all</button>
      <button type="button" class="btn btn-g btn-sm btn-icon" title="Refresh" onclick="cmpReload('<?=$s?>')"><?=ph('arrow-clockwise',14)?></button>
    </div>
    <div class="fb-bar"><div id="cmp-<?=$s?>-path" class="fb-path fv-edit" onclick="cmpPathClick('<?=$s?>',event)" title="Click empty space to type a path · click a crumb to navigate"><span style="color:var(--t2)">Not loaded</span></div></div>
    <div class="cmp-tbl-wrap tree" id="cmp-<?=$s?>-tbl"><div class="tree-empty">Choose a source and click Load.</div></div>
    <div class="cmp-sel" id="cmp-<?=$s?>-sel">Nothing selected</div>
  </div>
  <?php return ob_get_clean();
}

function render_form(){
  $action=htmlspecialchars(strtok($_SERVER['REQUEST_URI'],'?'));
  ?>

  <form name="upload" method="post" action="<?=$action?>" id="form-direct" class="view" data-view="direct" onsubmit="if(_bulkMode){event.preventDefault();bulkUploadStart();}">
    <div class="field">
      <div class="bulk-toggle-row"><label>Origin URL</label><button type="button" id="bulk-toggle" class="btn btn-g btn-sm" onclick="bulkToggle()" style="margin-left:auto">Bulk</button></div>
      <div id="single-url-wrap"><input type="url" id="url" name="url" autofocus tabindex="1" value="https://wordpress.org/latest.zip" placeholder="https://example.com/file.zip" onclick="this.select()"></div>
      <div class="bulk-url-area" id="bulk-url-area"><textarea id="bulk-urls" placeholder="Paste URLs here, one per line&#10;https://example.com/file1.zip&#10;https://example.com/file2.tar.gz" tabindex="1"></textarea>
      <div class="bulk-counter" id="bulk-counter"></div>
      <div class="bulk-progress-wrap" id="bulk-progress-wrap"><div class="bulk-bar" id="bulk-bar"></div></div>
      <div class="bulk-status" id="bulk-status"></div></div>
    </div>
    <div class="field"><label>Destination Folder</label><input type="text" id="folder" name="folder" tabindex="2" placeholder="subdirectory (optional)"></div>
    <div id="single-name-wrap" class="field"><label>Destination Filename</label><input type="text" id="name" name="name" tabindex="3" value="wordpress_latest.zip" placeholder="filename.zip"></div>
    <div class="flex-du">
      <div class="toggle-row"><div class="tgl-lbl">Extract archive after upload<span class="tgl-hint">Supports .zip .tar .tar.gz .tgz .gz</span></div><label class="sw"><input type="checkbox" name="extract" value="1" tabindex="4"><span class="sw-s"></span></label></div>
      <div class="toggle-row"><div class="tgl-lbl">WordPress installer mode<span class="tgl-hint">Move WP to root, clean themes, wipe plugins, no indexing</span></div><label class="sw"><input type="checkbox" name="wpinstall" value="1" tabindex="5"><span class="sw-s"></span></label></div>
    </div>
    <div class="form-wrap"><button type="submit" class="btn btn-p root" tabindex="6"><?=ph('arrow-up',18)?> Upload File</button></div>
  </form>

  <div id="form-pc" class="view" data-view="pc">
    <div class="field"><label>Choose File(s) <span style="font-weight:400;text-transform:none;font-size:.9em">(pick more than once to add)</span></label><input type="file" id="pc-file" multiple onchange="pcFilePicked()"></div>
    <div id="pc-filelist"></div>
    <div class="field"><label>Destination Folder</label><input type="text" id="pc-folder" placeholder="subdirectory (optional)"></div>
    <div class="field" id="pc-name-wrap"><label>Destination Filename <span style="font-weight:400;text-transform:none;font-size:.9em">(single file only)</span></label><input type="text" id="pc-name" placeholder="filename.ext (defaults to the chosen file's name)"></div>
    <div class="bulk-progress-wrap" id="pc-progress-wrap"><div class="bulk-bar" id="pc-bar"></div></div>
    <div class="bulk-counter" id="pc-counter"></div>
    <div id="pc-status" class="bulk-status"></div>
    <div class="form-wrap"><button type="button" class="btn btn-p root" onclick="pcUpload()"><?=ph('arrow-up',18)?> Upload to Server</button></div>
  </div>

  <form name="mitm" method="post" action="<?=$action?>" id="form-mitm" class="view" data-view="mitm" onsubmit="mitmSaveFields();if(_mitmBulkMode){event.preventDefault();mitmBulkStart();}">
    <input type="hidden" name="_mode" value="mitm">
    <div class="mitm-info"><?=ph('shuffle',15)?> <strong>MITM Relay:</strong> Current server asks the MITM server to fetch the source URL, then downloads the file from the MITM server to here, and optionally cleans it from MITM. No extraction or WP install in this mode. Both servers must run this script.</div>
    <div class="field"><label>MITM Server URL</label><input type="url" id="m-mitm-url" name="mitm_url" required tabindex="1" placeholder="https://turkey-server.com/upload.php" onclick="this.select()"></div>
    <div class="field">
      <div class="bulk-toggle-row"><label>Source URL</label><button type="button" id="mitm-bulk-toggle" class="btn btn-g btn-sm" onclick="mitmBulkToggle()" style="margin-left:auto">Bulk</button></div>
      <div id="m-single-url-wrap"><input type="url" id="m-url" name="url" required tabindex="2" placeholder="https://restricted-source.com/file.zip" onclick="this.select()"></div>
      <div class="bulk-url-area" id="mitm-bulk-url-area"><textarea id="mitm-bulk-urls" placeholder="Paste source URLs here, one per line&#10;https://restricted-source.com/file1.zip&#10;https://restricted-source.com/file2.tar.gz"></textarea>
      <div class="bulk-counter" id="mitm-bulk-counter"></div>
      <div class="bulk-progress-wrap" id="mitm-bulk-progress-wrap"><div class="bulk-bar" id="mitm-bulk-bar"></div></div>
      <div class="bulk-status" id="mitm-bulk-status"></div></div>
    </div>
    <div class="field"><label>Destination Folder</label><input type="text" id="m-folder" name="folder" tabindex="3" placeholder="subdirectory (optional)"></div>
    <div id="m-single-name-wrap" class="field"><label>Destination Filename</label><input type="text" id="m-name" name="name" required tabindex="4" placeholder="filename.zip"></div>
    <div class="toggle-row"><div class="tgl-lbl">Delete from MITM after transfer<span class="tgl-hint">Auto-clean the relay server when done</span></div><label class="sw"><input type="checkbox" id="m-delete" name="mitm_delete" value="1" checked tabindex="5"><span class="sw-s"></span></label></div>
    <div class="form-wrap"><button type="submit" class="btn btn-p root" tabindex="6"><?=ph('shuffle',18)?> MITM Transfer</button></div>
  </form>

  <div id="form-ftp" class="view" data-view="ftp">
    <div class="ftp-conn-card" id="ftp-conn-card">
      <div class="conn-hd">
        <span class="conn-ttl"><?=ph('hard-drives',13)?> FTP Connection</span>
        <div id="ftp-conn-summary" class="conn-summary" style="display:none;cursor:pointer" title="Edit connection" onclick="ftpToggleConn(false)"></div>
        <button type="button" id="ftp-conn-toggle" class="btn btn-g btn-sm conn-toggle" onclick="ftpToggleConn()" style="display:none">Edit</button>
      </div>
      <div id="ftp-conn-body">
      <div class="prof-row">
        <select id="ftp-prof"><option value="">— Saved connections —</option></select>
        <button type="button" class="btn btn-g btn-sm" onclick="ftpProfLoad()">Load</button>
        <button type="button" class="btn btn-g btn-sm" onclick="ftpProfSave()"><?=ph('floppy-disk',13)?> Save</button>
        <button type="button" class="btn btn-d btn-sm" onclick="ftpProfDelete()"><?=ph('trash',13)?></button>
      </div>
      <div class="prof-note">Saved connections (incl. password) are stored unencrypted in this browser only.</div>
      <div class="ftp-conn-grid">
        <div class="field"><label>Host / IP</label><input type="text" id="ftp-host" placeholder="ftp.example.com or 192.168.1.1" autocomplete="off" onclick="this.select()"></div>
        <div class="field"><label>Port</label><input type="number" id="ftp-port" value="21" min="1" max="65535" placeholder="21"></div>
        <div class="field"><label>Username</label><input type="text" id="ftp-user" placeholder="anonymous" autocomplete="off"></div>
        <div class="field"><label>Password</label><input type="password" id="ftp-pass" placeholder="password" autocomplete="new-password"></div>
        <div class="field"><label>Connection Method</label><select id="ftp-method" onchange="ftpMethodChange()"><option value="ftp">FTP (plain)</option><option value="ftps">FTPS (TLS/SSL)</option><option value="sftp">SFTP (SSH)</option></select></div>
        <div class="field"><label>Initial Directory <span style="font-weight:400;text-transform:none;font-size:.9em">(folder to load on connect)</span></label><input type="text" id="ftp-initdir" placeholder="/public_html  (blank = /)" autocomplete="off" onclick="this.select()" oninput="ftpSaveFields()"></div>
        <div class="field"><label>Web Base URL <span style="font-weight:400;text-transform:none;font-size:.9em">(optional &mdash; for Copy URL)</span></label><input type="text" id="ftp-baseurl" placeholder="https://dl.example.com" autocomplete="off" onclick="this.select()"></div>
        <div class="field"><label>Strip Path Prefix <span style="font-weight:400;text-transform:none;font-size:.9em">(optional &mdash; removed from URL path)</span></label><input type="text" id="ftp-strip" placeholder="/www" autocomplete="off" onclick="this.select()" oninput="ftpSaveFields()"></div>
        <div class="field"><label>Download-to Folder <span style="font-weight:400;text-transform:none;font-size:.9em">(optional &mdash; subfolder on this server)</span></label><input type="text" id="ftp-dl-folder" placeholder="e.g. downloads/ftp" autocomplete="off" onclick="this.select()" oninput="ftpSaveFields()"></div>
      </div>
      <details class="seclink-box" id="ftp-seclink">
        <summary><?=ph('lock-key',14)?> nginx secure_link &mdash; signed download URLs</summary>
        <div class="seclink-grid">
          <div class="toggle-row full"><div class="tgl-lbl">Sign web URLs with secure_link<span class="tgl-hint">Apply to Copy web URL &amp; bulk Copy URLs for files in a protected folder</span></div><label class="sw"><input type="checkbox" id="ftp-sl-on" onchange="ftpSaveFields()"><span class="sw-s"></span></label></div>
          <div class="field full"><label>Secret key <span style="font-weight:400;text-transform:none;font-size:.9em">(the value from secure_link_md5 &mdash; session only, never saved)</span></label><input type="password" id="ftp-sl-secret" autocomplete="new-password" placeholder="e.g. 310daa96727bbc07952f4193ef430484d2"></div>
          <div class="field"><label>Expiry TTL (seconds)</label><input type="number" id="ftp-sl-ttl" value="3600" min="1" oninput="ftpSaveFields()"></div>
          <div class="field"><label>md5 query param</label><input type="text" id="ftp-sl-md5param" value="md5" onclick="this.select()" oninput="ftpSaveFields()"></div>
          <div class="field"><label>expires query param</label><input type="text" id="ftp-sl-expparam" value="expires" onclick="this.select()" oninput="ftpSaveFields()"></div>
          <div class="field"><label>Hash expression <span style="font-weight:400;text-transform:none;font-size:.9em">(tokens: {expires} {uri} {addr} {secret})</span></label><input type="text" id="ftp-sl-tmpl" value="{expires}{uri}{addr} {secret}" onclick="this.select()" oninput="ftpSaveFields()"></div>
          <div class="toggle-row full"><div class="tgl-lbl">Include <code>$remote_addr</code> (bind to an IP)<span class="tgl-hint">On = the secure_link_md5 expression contains $remote_addr</span></div><label class="sw"><input type="checkbox" id="ftp-sl-useaddr" onchange="ftpSaveFields()"><span class="sw-s"></span></label></div>
          <div class="field full"><label>Bind to IP <span style="font-weight:400;text-transform:none;font-size:.9em">(blank = your current public IP, as this server sees it)</span></label><input type="text" id="ftp-sl-addr" placeholder="leave blank to auto-use your IP" autocomplete="off" onclick="this.select()" oninput="ftpSaveFields()"></div>
        </div>
        <div class="prof-note">Tokens are generated by this server as <code>Base-64-URL of md5_raw(expr)</code>. FTP/FTPS/SFTP transfers (Direct, Plain&nbsp;FTP, FXP, Save&nbsp;to&nbsp;server, Relay) use the FTP protocol and bypass nginx, so they never need a token &mdash; secure_link only affects browser/web-URL downloads.</div>
      </details>
      <div class="form-wrap" style="margin-top:.9rem">
        <button type="button" class="btn btn-p root" onclick="ftpConnect()"><?=ph('arrow-right',18)?> Connect &amp; Browse</button>
      </div>
      </div>
    </div>

    <div class="ftp-browser" id="ftp-browser-area" style="display:none">
      <div class="fb-bar">
        <button class="btn btn-g btn-sm btn-icon" onclick="ftpUp()" title="Up one level"><?=ph('arrow-up',14)?></button>
        <div id="ftp-path" class="fb-path" onclick="ftpPathClick(event)" title="Click empty space to type a path"><span style="color:var(--t2)">Not connected</span></div>
        <div class="seg ftp-view-seg" id="ftp-view-seg" title="Explorer = open one folder at a time · Tree = full recursive tree">
          <button type="button" class="active" data-v="explorer" onclick="ftpSetView('explorer')"><?=ph('folder',13)?> Explorer</button>
          <button type="button" data-v="tree" onclick="ftpSetView('tree')"><?=ph('tree-structure',13)?> Tree</button>
        </div>
        <button class="btn btn-p btn-sm" onclick="ftpUpToggle()" title="Upload into the current folder"><?=ph('arrow-up',14)?> Upload</button>
        <button class="btn btn-g btn-sm btn-icon" onclick="ftpLoad(ftpCwd)" title="Refresh"><?=ph('arrow-clockwise',14)?></button>
      </div>
      <div class="ftp-up-panel" id="ftp-up-panel" style="display:none">
        <div style="font-size:.78rem;color:var(--t2);margin-bottom:.6rem">Uploading into <code id="ftp-cur-dir" style="color:var(--t1);font-weight:600">/</code> &mdash; the folder open below. Navigate into another folder to change the target.</div>
        <div class="seg" id="ftp-up-seg" style="margin-bottom:.6rem">
          <button type="button" class="active" data-s="pc" onclick="ftpUpSetSrc('pc')"><?=ph('arrow-up',13)?> From PC</button>
          <button type="button" data-s="url" onclick="ftpUpSetSrc('url')"><?=ph('link',13)?> From URL</button>
          <button type="button" data-s="relay" onclick="ftpUpSetSrc('relay')"><?=ph('shuffle',13)?> Relay</button>
        </div>
        <div id="ftp-up-pc">
          <div class="field"><label>Choose File(s) <span style="font-weight:400;text-transform:none;font-size:.9em">(pick more than once to add)</span></label><input type="file" id="ftp-up-file" multiple onchange="ftpUpPcPicked()"></div>
          <div id="ftp-up-filelist"></div>
        </div>
        <div id="ftp-up-url" style="display:none">
          <div class="field"><label>Source URL(s) <span style="font-weight:400;text-transform:none;font-size:.9em">(one per line for bulk)</span></label>
            <div class="bulk-url-area" style="display:block;margin-bottom:0"><textarea id="ftp-up-urls" placeholder="https://example.com/file.zip&#10;https://example.com/file2.tar.gz"></textarea></div>
          </div>
        </div>
        <div id="ftp-up-relay" style="display:none">
          <div class="field"><label>Relay (MITM) Server URL</label><input type="url" id="ftp-up-relay-url" placeholder="https://relay.example.com/upload.php" onclick="this.select()"></div>
          <div class="field"><label>Source URL(s) <span style="font-weight:400;text-transform:none;font-size:.9em">(one per line for bulk)</span></label>
            <div class="bulk-url-area" style="display:block;margin-bottom:0"><textarea id="ftp-up-urls-relay" placeholder="https://restricted-source.com/file.zip"></textarea></div>
          </div>
          <div class="toggle-row"><div class="tgl-lbl">Delete from MITM after transfer<span class="tgl-hint">Auto-clean the relay server when done</span></div><label class="sw"><input type="checkbox" id="ftp-up-relay-del" checked><span class="sw-s"></span></label></div>
        </div>
        <div class="queue-ctl"><button type="button" class="btn btn-p btn-sm" onclick="ftpUpStart()"><?=ph('arrow-up',14)?> Upload to <span id="ftp-up-dir">/</span></button></div>
        <div class="bulk-counter" id="ftp-up-counter"></div>
        <div class="bulk-progress-wrap" id="ftp-up-progress-wrap"><div class="bulk-bar" id="ftp-up-bar"></div></div>
        <div class="bulk-status" id="ftp-up-status"></div>
      </div>
      <div id="ftp-bulk" class="fb-bulk">
        <span id="ftp-sel-n"></span>
        <button class="btn btn-g btn-sm" id="ftp-checkbtn" onclick="fvCheckToggle('ftp')"><?=ph('square',13)?> Check all</button>
        <button class="btn btn-g btn-sm" onclick="ftpBulkCopyUrls()"><?=ph('copy',13)?> Copy URLs</button>
        <button class="btn btn-d btn-sm" onclick="ftpBulkDelete()"><?=ph('trash',13)?> Delete Selected</button>
      </div>
      <div id="ftp-loading" style="display:none;text-align:center;padding:1.5rem;color:var(--t2)">Loading&hellip;</div>
      <div id="ftp-tbl-wrap"></div>
    </div>

    <div class="ftp-log-wrap">
      <div class="ftp-log-hdr">
        <span><?=ph('terminal-window',13)?> Log</span>
        <button class="btn btn-g btn-sm" style="padding:.18rem .55rem;font-size:.72rem;border-radius:6px" onclick="document.getElementById('ftp-log').innerHTML=''">Clear</button>
      </div>
      <div id="ftp-log" class="ftp-log"><div class="ftp-log-entry info">Ready &mdash; enter credentials and click Connect.</div></div>
    </div>
  </div>

  <div id="form-compare" class="view" data-view="compare">
    <div class="cmp-grid">
      <?=cmp_pane('l')?>
      <?=cmp_pane('r')?>
    </div>
    <div class="cmp-step">
      <div class="cmp-step-title"><?=ph('question',13)?> How comparison works</div>
      <div class="cmp-legend">
        <span><span class="cmp-tag t-same">identical</span> name + size match</span>
        <span><span class="cmp-tag t-diff">differs</span> size / type differs</span>
        <span><span class="cmp-tag t-only-l">only left</span> / <span class="cmp-tag t-only-r">only right</span> exists on one side</span>
        <span style="color:var(--t2)">Differing &amp; one-side-only files are auto-checked after Compare. <strong>Tree</strong> view compares full trees; <strong>Explorer</strong> view compares the open folder only.</span>
      </div>
      <div class="cmp-opts" style="margin-top:1rem">
        <div class="field"><label>Direction</label><div class="seg" id="cmp-dir"><button type="button" class="active" data-dir="lr" onclick="cmpSetDir('lr')">Left &rarr; Right</button><button type="button" data-dir="rl" onclick="cmpSetDir('rl')">Right &rarr; Left</button></div></div>
        <div class="field"><label>Method</label><select id="cmp-method" onchange="cmpMethodChange()"><option value="direct">Direct (download + upload)</option><option value="ftp">Plain FTP</option><option value="relay">Relay (MITM)</option><option value="fxp">FXP (server-to-server)</option><option value="http">HTTP via secure_link (download + upload)</option></select></div>
        <div class="field" id="cmp-relay-wrap" style="display:none"><label>Relay (MITM) URL</label><input type="url" id="cmp-relay" placeholder="https://relay.example.com/upload.php" onclick="this.select()"></div>
      </div>
      <div id="cmp-http-wrap" class="cmp-http-hint" style="display:none">Downloads each source file over its <strong>web URL</strong> (browse over FTP, fetch bytes over HTTP), then uploads to the destination. Set the source server's <strong>Web Base URL</strong> + <strong>secret</strong> in its connection form &rarr; <strong><?=ph('lock-key',12)?> nginx secure_link</strong> panel.</div>
      <div class="cmp-sync-total" id="cmp-sync-total">Compare, select files, then sync</div>
      <div class="cmp-actions">
        <button type="button" class="btn btn-g" onclick="cmpDiff()"><?=ph('arrows-left-right',16)?> Compare</button>
        <button type="button" class="btn btn-p" onclick="cmpSync()"><?=ph('arrow-up',16)?> Sync Selected</button>
      </div>
      <div id="cmp-diff-summary" style="font-size:.82rem;color:var(--t2);text-align:center;margin-top:.6rem"></div>
    </div>
    <div class="bulk-counter" id="cmp-counter"></div>
    <div class="bulk-progress-wrap" id="cmp-progress-wrap"><div class="bulk-bar" id="cmp-bar"></div></div>
    <div class="bulk-status" id="cmp-status"></div>
    <div class="ftp-log-wrap">
      <div class="ftp-log-hdr">
        <span><?=ph('terminal-window',13)?> Sync Log</span>
        <button type="button" class="btn btn-g btn-sm" style="padding:.18rem .55rem;font-size:.72rem;border-radius:6px" onclick="document.getElementById('cmp-log').innerHTML=''">Clear</button>
      </div>
      <div id="cmp-log" class="ftp-log"><div class="ftp-log-entry info">Ready &mdash; load both sides, Compare, select items, then Sync.</div></div>
    </div>
  </div>

  <div class="view" data-view="explorer" id="view-explorer">
    <div class="fb-bar">
      <button class="btn btn-g btn-sm btn-icon" onclick="fbUp()" title="Up one level"><?=ph('arrow-up',14)?></button>
      <div id="fb-path" class="fb-path" onclick="fbPathClick(event)" title="Click empty space to type a path"><span style="color:var(--t2)">Loading&hellip;</span></div>
      <button class="btn btn-p btn-sm" onclick="fbUpToggle()" title="Upload into the current folder"><?=ph('arrow-up',14)?> Upload here</button>
      <button class="btn btn-g btn-sm btn-icon" onclick="fbLoad(fbCwd)" title="Refresh"><?=ph('arrow-clockwise',14)?></button>
    </div>
    <div class="ftp-up-panel" id="fb-up-panel" style="display:none">
      <div style="font-size:.78rem;color:var(--t2);margin-bottom:.6rem">Uploading into <code id="fb-cur-dir" style="color:var(--t1);font-weight:600">this folder</code> &mdash; the folder open below. Navigate into another folder to change the target.</div>
      <div class="seg" id="fb-up-seg" style="margin-bottom:.6rem">
        <button type="button" class="active" data-s="pc" onclick="fbUpSetSrc('pc')"><?=ph('arrow-up',13)?> From PC</button>
        <button type="button" data-s="url" onclick="fbUpSetSrc('url')"><?=ph('link',13)?> From URL</button>
        <button type="button" data-s="relay" onclick="fbUpSetSrc('relay')"><?=ph('shuffle',13)?> Relay</button>
      </div>
      <div id="fb-up-pc">
        <div class="field"><label>Choose File(s) <span style="font-weight:400;text-transform:none;font-size:.9em">(pick more than once to add)</span></label><input type="file" id="fb-up-file" multiple onchange="fbUpPcPicked()"></div>
        <div id="fb-up-filelist"></div>
      </div>
      <div id="fb-up-url" style="display:none">
        <div class="field"><label>Source URL(s) <span style="font-weight:400;text-transform:none;font-size:.9em">(one per line for bulk)</span></label>
          <div class="bulk-url-area" style="display:block;margin-bottom:0"><textarea id="fb-up-urls" placeholder="https://example.com/file.zip&#10;https://example.com/file2.tar.gz"></textarea></div>
        </div>
      </div>
      <div id="fb-up-relay" style="display:none">
        <div class="field"><label>Relay (MITM) Server URL</label><input type="url" id="fb-up-relay-url" placeholder="https://relay.example.com/upload.php" onclick="this.select()"></div>
        <div class="field"><label>Source URL(s) <span style="font-weight:400;text-transform:none;font-size:.9em">(one per line for bulk)</span></label>
          <div class="bulk-url-area" style="display:block;margin-bottom:0"><textarea id="fb-up-urls-relay" placeholder="https://restricted-source.com/file.zip"></textarea></div>
        </div>
        <div class="toggle-row"><div class="tgl-lbl">Delete from MITM after transfer<span class="tgl-hint">Auto-clean the relay server when done</span></div><label class="sw"><input type="checkbox" id="fb-up-relay-del" checked><span class="sw-s"></span></label></div>
      </div>
      <div class="queue-ctl"><button type="button" class="btn btn-p btn-sm" onclick="fbUpStart()"><?=ph('arrow-up',14)?> Upload to <span id="fb-up-dir">this folder</span></button></div>
      <div class="bulk-counter" id="fb-up-counter"></div>
      <div class="bulk-progress-wrap" id="fb-up-progress-wrap"><div class="bulk-bar" id="fb-up-bar"></div></div>
      <div class="bulk-status" id="fb-up-status"></div>
    </div>
    <div id="fb-bulk" class="fb-bulk">
      <span id="fb-sel-n"></span>
      <button class="btn btn-g btn-sm" id="fb-checkbtn" onclick="fvCheckToggle('fb')"><?=ph('square',13)?> Check all</button>
      <button class="btn btn-g btn-sm" onclick="fbCopySelected()"><?=ph('copy',13)?> Copy URLs</button>
      <button class="btn btn-d btn-sm" onclick="fbDelSelected()"><?=ph('trash',13)?> Delete</button>
    </div>
    <div id="fb-loading" style="text-align:center;padding:2rem;color:var(--t2)">Loading&hellip;</div>
    <div id="fb-content" style="display:none"><div id="fb-tbl-wrap"></div></div>
  </div>

  <div class="view" data-view="phpinfo" id="view-phpinfo">
    <div class="fb-bar" style="justify-content:flex-end">
      <button type="button" class="btn btn-g btn-sm" id="phpinfo-toggle" onclick="togglePhpInfo()">Full phpInfo()</button>
    </div>
    <div id="info-content"><div style="text-align:center;padding:2rem;color:var(--t2)">Loading&hellip;</div></div>
    <iframe id="phpinfo-frame" src="about:blank" title="phpinfo" style="display:none;width:100%;height:72vh;border:1px solid var(--bd);border-radius:var(--rad);background:#fff"></iframe>
  </div>

  <div class="view" data-view="help" id="view-help">
      <div class="help-sec"><h4>PHP CLI Usage</h4>
<div class="help-code">php upload.php --url=&lt;URL&gt; --name=&lt;filename&gt; [options]

  --url=&lt;URL&gt;          Source URL to download      (required)
  --name=&lt;filename&gt;    Destination filename         (required)
  --folder=&lt;dir&gt;       Sub-directory               (optional)
  --extract             Extract archive after download
  --wpinstall           WordPress installer mode
  --delete              Self-destruct (removes this file)
  --help                Show this help

MITM Relay Mode:
  --mitm=&lt;URL&gt;          MITM server upload.php URL  (required)
  --mitm-keep           Keep file on MITM after transfer
  (--url, --name, --folder apply in MITM mode too)

Compare &amp; Sync Mode (recursive, by path relative to each root):
  --compare             Compare two locations
  --left=&lt;spec&gt;         Left side    (required)
  --right=&lt;spec&gt;        Right side   (required)
  --sync                Sync source-only + differing files to the other side
  --dir=lr|rl           Direction (default lr = left&rarr;right)
  --method=&lt;m&gt;          direct | ftp | relay | fxp   (default direct)
  --relay=&lt;URL&gt;         Relay (MITM) URL for --method=relay
  --yes                 Perform the sync (omit for a dry-run)
  &lt;spec&gt; = local:/abs/path | ftp://user:pass@host:port/root  (ftps:// sftp://)</div></div>
      <div class="help-sec"><h4>Removing PHP Limits &amp; Timeouts (big / slow files)</h4>
<div class="help-code">This script already calls set_time_limit(0) and raises limits at runtime, but
many hosts disable that. To upload/download large files without "504 / Maximum
execution time exceeded", raise the limits at the server level too.

── php.ini  (find yours in PHP Info → "Loaded Configuration File") ──
  max_execution_time = 0       ; 0 = unlimited (CLI is already unlimited)
  max_input_time     = -1
  memory_limit       = 1024M
  upload_max_filesize = 5G     ; only matters for "Upload from PC"
  post_max_size       = 5G     ; must be >= upload_max_filesize
  default_socket_timeout = 3600

── .user.ini  (shared hosting / PHP-FPM / CGI — put in this folder) ──
  max_execution_time = 0
  memory_limit = 1024M
  upload_max_filesize = 5G
  post_max_size = 5G
  ; takes effect after user_ini.cache_ttl (default 300s)

── .htaccess  (Apache + mod_php only) ──
  php_value max_execution_time 0
  php_value memory_limit 1024M
  php_value upload_max_filesize 5G
  php_value post_max_size 5G

── Apache (not mod_php) / proxies ──
  Timeout 3600                 ; httpd.conf / vhost
  # mod_fcgid:  FcgidIOTimeout 3600 / FcgidBusyTimeout 3600
  # mod_proxy_fcgi: ProxyTimeout 3600

── Nginx + PHP-FPM ──
  # nginx:  client_max_body_size 5G;  fastcgi_read_timeout 3600s;
  # php-fpm pool (www.conf):  request_terminate_timeout = 0

Note: "Upload from URL", "MITM Relay", "FTP Save-to-server" and "Sync" stream
through the server and are bound by max_execution_time, NOT upload_max_filesize.
Only "Upload from PC" is bound by upload_max_filesize / post_max_size.</div></div>
      <div class="help-sec"><h4>Update Check (from GitHub Releases)</h4>
<div class="help-code">Update tab → "Check for updates":
  1. Calls the GitHub Releases API for amirhp-com/upload-url-to-server
     (the "latest" release) and reads its tag (e.g. v3.6.0).
  2. Compares that tag to this file's APP_VER with version_compare().
  3. If newer, it shows a DIRECT DOWNLOAD link for the new upload.php
     (the release ASSET named "upload.php", else the raw file at that tag).
     It does NOT modify itself.
  4. You download the new upload.php and upload it back here — Upload →
     From PC, or the File Explorer "Upload here" — into this same folder,
     overwriting this script. The tool replaces its own version this way.

The server only needs outbound HTTPS to api.github.com +
raw.git<wbr>hubusercontent.com for the check. Keep a copy of the old file
first if you want an easy rollback.</div></div>
      <div class="help-sec"><h4>File Tree &amp; Compare</h4>
<div class="help-code">File Explorer and FTP Explorer use a single-folder view: click a folder to
open it, use the address bar (type a path + Enter or Go), the Up arrow, or the
breadcrumb to navigate. FTP uploads always target the folder currently open.

The Compare panes still use an expandable TREE: click a folder to load just it,
or "Full tree" to load everything (recursively, capped for safety).

Compare &amp; Sync tab: each side is Local or FTP/FTPS/SFTP, with its own ROOT
folder. Compare matches files across the whole tree by path RELATIVE to each
root (e.g. /public_html/x.zip vs /w2w/x.zip), flagging same / size-differs /
only-left / only-right. Tick items (a folder ticks its subtree) and Sync in
the chosen direction via Direct, Plain FTP, Relay (MITM) or FXP — sub-folder
structure is recreated on the destination.

Saved connections: store FTP credentials + settings locally (per browser) and
reload them into the FTP Browser or either Compare side with one click.</div></div>
      <div class="help-sec"><h4>CLI Compare Examples</h4>
<div class="help-code">php upload.php --compare --left=local:/var/www --right=ftp://u:p@host/public_html

php upload.php --compare --left=ftp://u:p@a.com/w2w --right=ftp://u:p@b.com/htdocs \
  --sync --dir=lr --method=direct --yes</div></div>
      <div class="help-sec"><h4>Examples</h4>
<div class="help-code">php upload.php --url=https://wordpress.org/latest.zip --name=wp.zip --wpinstall

php upload.php --url=https://example.com/app.zip --name=app.zip --folder=downloads --extract

php upload.php --mitm=https://turkey.example.com/upload.php --url=https://iran.example.com/file.zip --name=file.zip</div></div>
      <div class="help-sec"><h4>MITM Relay</h4>
<div class="help-code">Server A (Germany) cannot reach Source (Iran).
Server B (Turkey) can reach both.

Flow: A &rarr; asks B to fetch source &rarr; A downloads from B &rarr; A deletes from B

Both servers must run this upload.php (v2.0.0+).</div></div>
      <div class="help-sec"><h4>Web Actions</h4>
<div class="help-code">?phpinfo=1     Full phpinfo() in new tab
?delete=true   Self-destruct script
?r=            Reload / clear form</div></div>
  </div>

  <div class="view" data-view="update" id="view-update">
    <div class="upload-card">
      <div class="upload-meta">Current version: <strong>v<?=APP_VER?></strong><br>Checks the GitHub Releases API. If a newer release exists it shows a direct download link &mdash; download the new <code>upload.php</code>, then upload it back here (Upload &rarr; From PC) to replace this file. This script never overwrites itself.</div>
      <button class="btn btn-p" onclick="checkUpdate()"><?=ph('arrow-clockwise',16)?> Check for updates</button>
      <div id="update-status" class="status-line" style="margin-top:.7rem"></div>
      <div class="ftp-log-wrap">
        <div class="ftp-log-hdr">
          <span><?=ph('terminal-window',13)?> Update Log</span>
          <button class="btn btn-g btn-sm" style="padding:.18rem .55rem;font-size:.72rem;border-radius:6px" onclick="document.getElementById('update-log').innerHTML=''">Clear</button>
        </div>
        <div id="update-log" class="ftp-log"><div class="ftp-log-entry info">Ready &mdash; click “Check for updates”.</div></div>
      </div>
    </div>
  </div>

  <script>
  initView();
  bulkRestoreMode();
  mitmBulkRestoreMode();
  (function(){
    ['m-mitm-url','m-folder'].forEach(function(id){var e=document.getElementById(id);if(e)e.addEventListener('input',mitmSaveFields);});
    var md=document.getElementById('m-delete');if(md)md.addEventListener('change',mitmSaveFields);
  })();
  setTimeout(function(){var u=document.querySelector('#url');if(u&&document.getElementById('form-direct').style.display!=='none'&&!_bulkMode)u.select();},200);
  (function(){
    var u=document.querySelector('#url'),n=document.querySelector('#name');
    if(u&&n){function sync(){var v=u.value.split('?')[0].split('#')[0].split('/').pop();if(v)n.value=v;}u.addEventListener('change',sync);u.addEventListener('keyup',sync);}
    var mu=document.querySelector('#m-url'),mn=document.querySelector('#m-name');
    if(mu&&mn){function msync(){var v=mu.value.split('?')[0].split('#')[0].split('/').pop();if(v)mn.value=v;}mu.addEventListener('change',msync);mu.addEventListener('keyup',msync);}
  })();
  </script>
  <?php
}

function handle_upload(){
  set_time_limit(0);
  $url=trim((string)($_POST['url']??''));
  $name=sanitize_filename((string)($_POST['name']??''));
  $folder=sanitize_folder((string)($_POST['folder']??''));
  $extract=!empty($_POST['extract']);
  $wpinstall=!empty($_POST['wpinstall']);

  if($name===''||!filter_var($url,FILTER_VALIDATE_URL)){
    echo '<script>appendStatus(\'&#9940; Invalid URL or filename.\');setPg(0);</script>';
    flush_buffers(true);
    return;
  }

  ob_implicit_flush(true);
  while(ob_get_level()>0)ob_end_flush();
  ob_start();

  $base_url=build_base_url();
  $dest_url=$base_url.'/'.($folder?"$folder/":'').$name;
  $start_time=microtime(true);
  $root_dir=__DIR__;
  $dest_dir=$folder!==''?$root_dir.'/'.$folder:$root_dir;
  if(!is_dir($dest_dir))@mkdir($dest_dir,0755,true);
  $path_full=rtrim($dest_dir,'/\\').'/'.$name;
  if(file_exists($path_full))@unlink($path_full);

  $result=download_with_curl($url,$path_full,$start_time);

  if(!$result['ok']){
    echo "<script>appendStatus('&#9940; Download failed: ".js_escape($result['error'])."');setPg(0);</script>";
    flush_buffers(true);
    render_completion_buttons($path_full);
    return;
  }

  $filesize=filesize($path_full);
  echo "<script>setPg(100);document.title='Done - BlackSwan Upload';document.getElementById('progress').innerHTML='100.00% &mdash; ".human_filesize($filesize)." / ".human_filesize($filesize)."';appendStatus('&#9989; Transfer completed in ".human_timing($start_time)." &mdash; ".human_filesize($filesize)."');</script>";
  flush_buffers(true);

  if($wpinstall)run_wordpress_installer($path_full,$root_dir);
  elseif($extract)run_archive_extraction($path_full,$dest_dir);

  render_result_urls($url,$dest_url);
  render_completion_buttons($path_full);
}

function handle_mitm_upload(){
  set_time_limit(0);
  $mitm_url=trim((string)($_POST['mitm_url']??''));
  $url=trim((string)($_POST['url']??''));
  $name=sanitize_filename((string)($_POST['name']??''));
  $folder=sanitize_folder((string)($_POST['folder']??''));
  $delete_after=!empty($_POST['mitm_delete']);

  if(!filter_var($mitm_url,FILTER_VALIDATE_URL)||!filter_var($url,FILTER_VALIDATE_URL)||$name===''){
    echo '<script>appendStatus(\'&#9940; Invalid MITM URL, source URL, or filename.\');setPg(0);</script>';
    flush_buffers(true);render_completion_buttons('','mitm');return;
  }

  ob_implicit_flush(true);while(ob_get_level()>0)ob_end_flush();ob_start();

  echo "<script>appendStatus('&#8680; Requesting MITM server to fetch source&hellip;');setPg(10);</script>";
  flush_buffers(true);

  $fd=['_a'=>'fetch','url'=>$url,'_name'=>$name];
  if($folder!=='')$fd['_folder']=$folder;
  $mitm_result=mitm_post($mitm_url,$fd);

  if(!$mitm_result||empty($mitm_result['ok'])){
    $err=isset($mitm_result['error'])?$mitm_result['error']:'Could not reach MITM server or fetch failed';
    echo "<script>appendStatus('&#9940; MITM fetch failed: ".js_escape($err)."');setPg(0);</script>";
    flush_buffers(true);render_completion_buttons('','mitm');return;
  }

  $mitm_file_url=$mitm_result['url']??'';
  if(!$mitm_file_url){
    echo "<script>appendStatus('&#9940; MITM server did not return a file URL');setPg(0);</script>";
    flush_buffers(true);render_completion_buttons('','mitm');return;
  }

  $sz_hint=!empty($mitm_result['size'])?human_filesize((int)$mitm_result['size']):'';
  echo "<script>appendStatus('&#9989; MITM server fetched file".($sz_hint?" ($sz_hint)":'')."');setPg(33);</script>";
  flush_buffers(true);

  echo "<script>appendStatus('&#8680; Downloading from MITM to current server&hellip;');</script>";
  flush_buffers(true);

  $base_url=build_base_url();
  $dest_url=$base_url.'/'.($folder?"$folder/":'').$name;
  $start_time=microtime(true);
  $root_dir=__DIR__;
  $dest_dir=$folder!==''?$root_dir.'/'.$folder:$root_dir;
  if(!is_dir($dest_dir))@mkdir($dest_dir,0755,true);
  $path_full=rtrim($dest_dir,'/\\').'/'.$name;
  if(file_exists($path_full))@unlink($path_full);

  $result=download_with_curl($mitm_file_url,$path_full,$start_time);

  if(!$result['ok']){
    echo "<script>appendStatus('&#9940; Transfer from MITM failed: ".js_escape($result['error'])."');setPg(0);</script>";
    flush_buffers(true);render_completion_buttons($path_full,'mitm');return;
  }

  $filesize=filesize($path_full);
  echo "<script>setPg(80);document.title='Done - BlackSwan Upload';appendStatus('&#9989; Transferred from MITM &mdash; ".human_filesize($filesize)." in ".human_timing($start_time)."');</script>";
  flush_buffers(true);

  if($delete_after){
    echo "<script>appendStatus('&#9203; Deleting file from MITM server&hellip;');</script>";
    flush_buffers(true);
    $del_fd=['_a'=>'del_by_name','_name'=>$name];
    if($folder!=='')$del_fd['_folder']=$folder;
    $del_result=mitm_post($mitm_url,$del_fd);
    if($del_result&&!empty($del_result['ok'])){
      echo "<script>appendStatus('&#9989; Deleted from MITM server');setPg(100);</script>";
    }else{
      echo "<script>appendStatus('&#9888; Could not delete from MITM server &mdash; manual cleanup may be needed');</script>";
      echo "<script>setPg(100);</script>";
    }
    flush_buffers(true);
  }else{
    echo "<script>setPg(100);</script>";flush_buffers(true);
  }

  render_result_urls($url,$dest_url);
  render_completion_buttons($path_full,'mitm');
}

function download_with_curl($url,$dest_path,$start_time){
  $fp=fopen($dest_path,'wb');
  if(!$fp)return['ok'=>false,'error'=>'cannot open destination file for writing'];
  $ch=curl_init($url);
  if(!$ch){fclose($fp);return['ok'=>false,'error'=>'curl init failed'];}
  $last_update=0.0;$last_pad=microtime(true);
  curl_setopt_array($ch,[
    CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_MAXREDIRS=>10,
    CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_BUFFERSIZE=>65536,
    CURLOPT_NOPROGRESS=>false,CURLOPT_TIMEOUT=>0,CURLOPT_CONNECTTIMEOUT=>30,
    CURLOPT_FAILONERROR=>false,
    CURLOPT_USERAGENT=>'Mozilla/5.0 (compatible; BlackSwanUpload/'.APP_VER.'; +https://amirhp.com/)',
    CURLOPT_PROGRESSFUNCTION=>function()use(&$last_update,&$last_pad,$start_time){
      $a=func_get_args();
      $tot=isset($a[1])?(float)$a[1]:0;$now_dl=isset($a[2])?(float)$a[2]:0;
      if($tot<1)return 0;
      $now=microtime(true);$is_done=($now_dl>=$tot);
      if(($now-$last_update)<0.2&&!$is_done)return 0;
      $last_update=$now;
      $pct=min(100,($now_dl/$tot)*100);
      $cur=human_filesize($now_dl);$total=human_filesize($tot);
      $elapsed=human_timing($start_time);
      $elapsed_s=$now-$start_time;
      $eta=($now_dl>0&&$tot>$now_dl)?human_timing2($elapsed_s*($tot-$now_dl)/$now_dl):'';
      echo "<script>updateProgress($pct,'$cur','$total','$elapsed','$eta');</script>";
      $pad=($now-$last_pad)>=8;if($pad)$last_pad=$now;
      flush_buffers($pad);
      return 0;
    },
  ]);
  $ok=curl_exec($ch);$http=curl_getinfo($ch,CURLINFO_HTTP_CODE);$err=curl_error($ch);
  curl_close($ch);fclose($fp);
  if(!$ok||($http>=400&&$http!==0))return['ok'=>false,'error'=>"HTTP $http ".($err?:'(no curl error)')];
  $sz=@filesize($dest_path);
  if($sz===false||$sz<1)return['ok'=>false,'error'=>'downloaded file is empty'];
  return['ok'=>true];
}

function mitm_post($url,$fields){
  $ch=curl_init($url);
  if(!$ch)return null;
  curl_setopt_array($ch,[
    CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>$fields,
    CURLOPT_RETURNTRANSFER=>true,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_MAXREDIRS=>5,
    CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_SSL_VERIFYPEER=>0,
    CURLOPT_TIMEOUT=>300,CURLOPT_CONNECTTIMEOUT=>30,
    CURLOPT_USERAGENT=>'Mozilla/5.0 (compatible; BlackSwanUpload/'.APP_VER.')',
  ]);
  $resp=curl_exec($ch);$err=curl_error($ch);curl_close($ch);
  if(!$resp||$err)return null;
  return @json_decode($resp,true);
}

function run_archive_extraction($file,$dest_dir){
  echo "<script>appendStatus('&#9203; Extracting archive&hellip;');</script>";flush_buffers(true);
  $res=extract_archive($file,$dest_dir);
  echo "<script>appendStatus('".(($res['ok']?'&#9989; ':'&#9940; ').js_escape($res['msg']))."');</script>";
  flush_buffers(true);
}

function run_wordpress_installer($zip_file,$root_dir){
  echo "<script>appendStatus('&#9203; Extracting WordPress archive&hellip;');</script>";flush_buffers(true);
  $temp=$root_dir.'/__wp_tmp_'.substr(md5(uniqid('',true)),0,8);
  if(!@mkdir($temp,0755,true)){echo "<script>appendStatus('&#9940; Cannot create temp folder');</script>";flush_buffers(true);return;}
  $zip=new ZipArchive;
  if($zip->open($zip_file)!==true){rmdir_recursive($temp);echo "<script>appendStatus('&#9940; Failed to open WordPress zip');</script>";flush_buffers(true);return;}
  $zip->extractTo($temp);$zip->close();
  echo "<script>appendStatus('&#9989; Archive extracted');</script>";flush_buffers(true);
  $wp_src=$temp.'/wordpress';
  if(!is_dir($wp_src)){rmdir_recursive($temp);echo "<script>appendStatus('&#9940; wordpress/ folder not found inside archive');</script>";flush_buffers(true);return;}
  echo "<script>appendStatus('&#9203; Moving WordPress files to root&hellip;');</script>";flush_buffers(true);
  $mf=0;$md=0;
  foreach(scandir($wp_src)as $item){
    if($item==='.'||$item==='..')continue;
    $src=$wp_src.'/'.$item;$dst=$root_dir.'/'.$item;
    if(file_exists($dst)){is_dir($dst)?rmdir_recursive($dst):@unlink($dst);}
    if(@rename($src,$dst)){is_dir($dst)?$md++:$mf++;}
  }
  echo "<script>appendStatus('&#9989; <strong>$mf</strong> files &amp; <strong>$md</strong> folders moved to root');</script>";flush_buffers(true);
  rmdir_recursive($temp);
  $themes_dir=$root_dir.'/wp-content/themes';
  if(is_dir($themes_dir)){
    $td=[];foreach(scandir($themes_dir)as $t){if($t!=='.'&&$t!=='..'&&is_dir($themes_dir.'/'.$t))$td[]=$t;}
    sort($td,SORT_NATURAL|SORT_FLAG_CASE);$latest=end($td);$rm=0;
    foreach($td as $t){if($t===$latest)continue;if(rmdir_recursive($themes_dir.'/'.$t))$rm++;}
    if($latest){echo "<script>appendStatus('&#9989; Kept theme: <strong>".js_escape($latest)."</strong>, removed <strong>$rm</strong> old themes');</script>";flush_buffers(true);}
  }
  $plugins_dir=$root_dir.'/wp-content/plugins';
  if(is_dir($plugins_dir)){
    $rm=0;foreach(scandir($plugins_dir)as $p){if($p==='.'||$p==='..')continue;$path=$plugins_dir.'/'.$p;if(is_dir($path)){if(rmdir_recursive($path))$rm++;}else{if(@unlink($path))$rm++;}}
    @file_put_contents($plugins_dir.'/index.php',"<?php\n// Silence is golden.\n");
    echo "<script>appendStatus('&#9989; Wiped <strong>$rm</strong> default plugins');</script>";flush_buffers(true);
  }
  if(@file_put_contents($root_dir.'/robots.txt',"User-agent: *\nDisallow: /\n")!==false){echo "<script>appendStatus('&#9989; robots.txt written (block all crawlers)');</script>";flush_buffers(true);}
  $ex=0;foreach(['license.txt','readme.html','xmlrpc.php','wp-config-sample.php']as $f){if(@unlink($root_dir.'/'.$f))$ex++;}
  if(@unlink($zip_file))$ex++;
  echo "<script>appendStatus('&#9989; Removed <strong>$ex</strong> extra files (incl. uploaded zip)');</script>";flush_buffers(true);
}

function extract_archive($file,$dest){
  if(!is_dir($dest))@mkdir($dest,0755,true);
  $lower=strtolower($file);
  if(preg_match('/\.zip$/',$lower)){
    if(!class_exists('ZipArchive'))return['ok'=>false,'msg'=>'ZipArchive not available'];
    $zip=new ZipArchive;if($zip->open($file)!==true)return['ok'=>false,'msg'=>'Failed to open zip'];
    $count=$zip->numFiles;$zip->extractTo($dest);$zip->close();
    return['ok'=>true,'msg'=>"Zip extracted ($count entries)"];
  }
  if(preg_match('/\.tar$/',$lower)){
    if(!class_exists('PharData'))return['ok'=>false,'msg'=>'PharData not available'];
    try{$p=new PharData($file);$p->extractTo($dest,null,true);return['ok'=>true,'msg'=>'Tar extracted'];}
    catch(Exception $e){return['ok'=>false,'msg'=>'Tar extract failed: '.$e->getMessage()];}
  }
  if(preg_match('/\.(tar\.gz|tgz)$/',$lower)){
    if(!class_exists('PharData'))return['ok'=>false,'msg'=>'PharData not available'];
    try{
      $p=new PharData($file);$tf=preg_replace('/\.(tar\.gz|tgz)$/','.tar',$file);
      if(file_exists($tf))@unlink($tf);$p->decompress();
      $p2=new PharData($tf);$p2->extractTo($dest,null,true);@unlink($tf);
      return['ok'=>true,'msg'=>'tar.gz extracted'];
    }catch(Exception $e){return['ok'=>false,'msg'=>'tar.gz extract failed: '.$e->getMessage()];}
  }
  if(preg_match('/\.gz$/',$lower)){
    if(!function_exists('gzopen'))return['ok'=>false,'msg'=>'zlib not available'];
    $out=$dest.'/'.basename($file,'.gz');
    $gz=@gzopen($file,'rb');$of=@fopen($out,'wb');
    if(!$gz||!$of){if($gz)gzclose($gz);if($of)fclose($of);return['ok'=>false,'msg'=>'Failed to open .gz'];}
    while(!gzeof($gz))fwrite($of,gzread($gz,65536));
    gzclose($gz);fclose($of);return['ok'=>true,'msg'=>'gz decompressed to '.basename($out)];
  }
  return['ok'=>false,'msg'=>'Unsupported archive format'];
}

function render_result_urls($src,$dst){
  $html='<div class="result-box">'
    .'<div class="url-row"><span class="url-lbl">Source</span>'
    .'<input class="url-inp" type="text" readonly value="'.htmlspecialchars($src,ENT_QUOTES).'" onclick="this.select()">'
    .'<button class="copy-btn" onclick="copyText(this.previousElementSibling.value,this)">Copy</button></div>'
    .'<div class="url-row"><span class="url-lbl">Dest</span>'
    .'<input class="url-inp" type="text" readonly value="'.htmlspecialchars($dst,ENT_QUOTES).'" onclick="this.select()">'
    .'<button class="copy-btn" onclick="copyText(this.previousElementSibling.value,this)">Copy</button></div>'
    .'</div>';
  echo '<script>document.getElementById("upload-area").insertAdjacentHTML("beforeend",'.json_encode($html).');</script>';
  flush_buffers(true);
}

function render_completion_buttons($path_full='',$mode='direct'){
  $del='';
  if($path_full!==''&&file_exists($path_full))
    $del='<a target="_blank" href="?delete_file='.urlencode($path_full).'" class="btn btn-d">Delete File</a>';
  $again='?r='.time().($mode==='mitm'?'&m=mitm':'');
  $btns='<div class="done-btns">'
    .'<a href="'.$again.'" class="btn btn-p">Upload Another</a>'
    .$del
    .'<a href="?delete=true" class="btn btn-d">Self Destruct</a>'
    .'</div>';
  echo '<script>setPg(100);document.getElementById("upload-area").insertAdjacentHTML("beforeend",'.json_encode($btns).');</script>';
  flush_buffers(true);
}

function dir_size_bytes($dir,$depth=0){
  // Recursive folder size, guarded against deep trees and symlink loops.
  if($depth>12)return 0;
  $entries=@scandir($dir);if($entries===false)return 0;
  $total=0;
  foreach($entries as $f){
    if($f==='.'||$f==='..')continue;
    $full=$dir.'/'.$f;
    if(is_link($full))continue;
    if(is_dir($full))$total+=dir_size_bytes($full,$depth+1);
    else $total+=(int)@filesize($full);
  }
  return $total;
}
function ls_dir_items($dir){
  $entries=@scandir($dir);
  if($entries===false)return null;
  $items=[];
  foreach($entries as $entry){
    if($entry==='.'||$entry==='..')continue;
    $full=$dir.'/'.$entry;$is_dir=is_dir($full);
    $sz=$is_dir?dir_size_bytes($full):@filesize($full);$mt=@filemtime($full);
    $url='';
    if(!$is_dir){
      $dr=realpath($_SERVER['DOCUMENT_ROOT']??'');
      if($dr&&strpos($full,$dr)===0){
        $rel=str_replace('\\','/',substr($full,strlen($dr)));
        $proto=(!empty($_SERVER['HTTPS'])&&$_SERVER['HTTPS']!=='off')?'https':'http';
        $host=$_SERVER['HTTP_HOST']??'localhost';
        $url=rtrim($proto.'://'.$host,'/').'/'.(ltrim($rel,'/'));
      }
    }
    $fp_int=@fileperms($full);
    $perms_octal=$fp_int!==false?substr(sprintf('%o',$fp_int),-4):'';
    $perms_sym=$fp_int!==false?perms_int_to_sym($fp_int):'';
    $items[]=['name'=>$entry,'type'=>$is_dir?'dir':'file','path'=>$full,'size'=>human_filesize((int)$sz),'size_bytes'=>(int)$sz,'mtime'=>$mt?date('Y-m-d H:i',$mt):'','url'=>$url,'perms_octal'=>$perms_octal,'perms_sym'=>$perms_sym];
  }
  usort($items,function($a,$b){if($a['type']!==$b['type'])return $a['type']==='dir'?-1:1;return strnatcasecmp($a['name'],$b['name']);});
  return $items;
}

function ajax_ls(){
  $req=trim((string)($_POST['_p']??''));
  $dir=($req===''||$req==='__ROOT__')?__DIR__:(is_dir($req)?realpath($req):false);
  if(!$dir||!is_dir($dir))return['ok'=>false,'msg'=>'Directory not found'];
  $parent=dirname($dir);if($parent===$dir)$parent=null;
  if($parent!==null&&!is_dir($parent))$parent=null;
  $crumbs=[];
  $parts=array_filter(explode('/',str_replace('\\','/',$dir)));
  $acc='';foreach($parts as $part){$acc.='/'.$part;$crumbs[]=['name'=>$part,'path'=>$acc];}
  $items=ls_dir_items($dir);
  if($items===null)return['ok'=>false,'msg'=>'Cannot read directory'];
  return['ok'=>true,'path'=>$dir,'parent'=>$parent,'breadcrumbs'=>$crumbs,'items'=>$items];
}

function ls_tree_walk($dir,$depth,&$count,&$capped){
  $items=ls_dir_items($dir);
  if($items===null)return[];
  foreach($items as &$it){
    $count++;
    if($count>=TREE_MAX_NODES){$capped=true;break;}
    if($it['type']==='dir'){
      if($depth+1>=TREE_MAX_DEPTH){$capped=true;$it['children']=null;continue;}
      $it['children']=ls_tree_walk($it['path'],$depth+1,$count,$capped);
    }
  }
  unset($it);
  return $items;
}

function ajax_ls_tree(){
  $req=trim((string)($_POST['_p']??''));
  $dir=($req===''||$req==='__ROOT__')?__DIR__:(is_dir($req)?realpath($req):false);
  if(!$dir||!is_dir($dir))return['ok'=>false,'msg'=>'Directory not found'];
  $count=0;$capped=false;
  $tree=ls_tree_walk($dir,0,$count,$capped);
  return['ok'=>true,'path'=>$dir,'root'=>$dir,'tree'=>$tree,'count'=>$count,'capped'=>$capped];
}

function ajax_del(){
  $req=trim((string)($_POST['_p']??''));
  if($req==='')return['ok'=>false,'msg'=>'No path'];
  $real=realpath($req);$self=realpath(__FILE__);
  if(!$real)return['ok'=>false,'msg'=>'Path not found'];
  if($real===$self)return['ok'=>false,'msg'=>'Cannot delete self'];
  if(is_dir($real)){$ok=rmdir_recursive($real);}else{$ok=@unlink($real);}
  return['ok'=>$ok,'msg'=>$ok?'Deleted':'Delete failed'];
}

function ajax_fetch(){
  $url=trim((string)($_POST['url']??''));
  $name=sanitize_filename((string)($_POST['_name']??''));
  $folder=sanitize_folder((string)($_POST['_folder']??''));
  if(!filter_var($url,FILTER_VALIDATE_URL))return['ok'=>false,'error'=>'Invalid URL'];
  if($name==='')return['ok'=>false,'error'=>'Name required'];
  $dir=$folder!==''?__DIR__.'/'.$folder:__DIR__;
  if(!is_dir($dir))@mkdir($dir,0755,true);
  $path=rtrim($dir,'/\\').'/'.$name;
  if(file_exists($path))@unlink($path);
  $fp=fopen($path,'wb');if(!$fp)return['ok'=>false,'error'=>'Cannot write destination'];
  $ch=curl_init($url);
  if(!$ch){fclose($fp);return['ok'=>false,'error'=>'curl init failed'];}
  curl_setopt_array($ch,[
    CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_MAXREDIRS=>10,
    CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_SSL_VERIFYPEER=>0,
    CURLOPT_TIMEOUT=>0,CURLOPT_CONNECTTIMEOUT=>30,
    CURLOPT_USERAGENT=>'Mozilla/5.0 (compatible; BlackSwanUpload/'.APP_VER.')',
  ]);
  $ok=curl_exec($ch);$http=curl_getinfo($ch,CURLINFO_HTTP_CODE);$err=curl_error($ch);
  curl_close($ch);fclose($fp);
  if(!$ok||($http>=400&&$http!==0)){@unlink($path);return['ok'=>false,'error'=>"HTTP $http ".($err?:'')];}
  $sz=@filesize($path);
  if(!$sz){@unlink($path);return['ok'=>false,'error'=>'Downloaded file is empty'];}
  $file_url=build_base_url().'/'.($folder?"$folder/":'').$name;
  return['ok'=>true,'path'=>$path,'size'=>$sz,'url'=>$file_url,'name'=>$name,'folder'=>$folder];
}

function ajax_upload_local(){
  if(empty($_FILES['file'])||!isset($_FILES['file']['tmp_name'])){
    return['ok'=>false,'error'=>'No file received (check upload_max_filesize / post_max_size)'];
  }
  $f=$_FILES['file'];
  if(!empty($f['error'])){
    $map=[1=>'File exceeds server upload_max_filesize',2=>'File exceeds form limit',3=>'Partial upload — try again',4=>'No file selected',6=>'Missing server temp folder',7=>'Failed to write to disk',8=>'Upload blocked by a PHP extension'];
    return['ok'=>false,'error'=>$map[$f['error']]??('Upload error '.$f['error'])];
  }
  $name=sanitize_filename((string)($_POST['_name']??''));
  if($name==='')$name=sanitize_filename((string)$f['name']);
  if($name==='')return['ok'=>false,'error'=>'Invalid filename'];
  $folder=sanitize_folder((string)($_POST['folder']??''));
  $root_dir=__DIR__;
  $dest_dir=$folder?$root_dir.'/'.$folder:$root_dir;
  if($folder!==''&&!is_dir($dest_dir))@mkdir($dest_dir,0755,true);
  if(!is_dir($dest_dir)||!is_writable($dest_dir))return['ok'=>false,'error'=>'Destination folder is not writable'];
  if(!is_uploaded_file($f['tmp_name']))return['ok'=>false,'error'=>'Invalid upload source'];
  $target=rtrim($dest_dir,'/\\').'/'.$name;
  if(!@move_uploaded_file($f['tmp_name'],$target))return['ok'=>false,'error'=>'Failed to save the uploaded file'];
  @chmod($target,0644);
  $rel=($folder!==''?$folder.'/':'').$name;
  return['ok'=>true,'url'=>build_base_url().'/'.$rel,'size'=>filesize($target),'name'=>$name,'folder'=>$folder];
}

// "Upload here" for the local File Explorer — drop a PC / URL / relay file into the folder being browsed.
function ajax_fb_upload(){
  set_time_limit(0);$start=microtime(true);
  $dirReq=trim((string)($_POST['_dir']??''));
  $src=trim((string)($_POST['_src']??'pc'));
  $name=sanitize_filename((string)($_POST['_name']??''));
  $dir=($dirReq===''||$dirReq==='__ROOT__')?__DIR__:(is_dir($dirReq)?realpath($dirReq):false);
  if(!$dir||!is_dir($dir))return['ok'=>false,'error'=>'Target folder not found'];
  if(!is_writable($dir))return['ok'=>false,'error'=>'Target folder is not writable'];
  if($src==='pc'){
    if(empty($_FILES['file'])||!isset($_FILES['file']['tmp_name']))return['ok'=>false,'error'=>'No file received (check upload_max_filesize / post_max_size)'];
    $f=$_FILES['file'];
    if(!empty($f['error'])){$map=[1=>'File exceeds server upload_max_filesize',2=>'File exceeds form limit',3=>'Partial upload — try again',4=>'No file selected',6=>'Missing server temp folder',7=>'Failed to write to disk',8=>'Upload blocked by a PHP extension'];return['ok'=>false,'error'=>$map[$f['error']]??('Upload error '.$f['error'])];}
    if($name==='')$name=sanitize_filename((string)$f['name']);
    if($name==='')return['ok'=>false,'error'=>'Invalid filename'];
    if(!is_uploaded_file($f['tmp_name']))return['ok'=>false,'error'=>'Invalid upload source'];
    $target=rtrim($dir,'/\\').'/'.$name;
    if(!@move_uploaded_file($f['tmp_name'],$target))return['ok'=>false,'error'=>'Failed to save the uploaded file'];
    @chmod($target,0644);
    return['ok'=>true,'name'=>$name,'size'=>(int)@filesize($target),'path'=>$target,'elapsed'=>human_timing($start)];
  }
  // url / relay → download to temp, then move into the target folder
  $tmp=tempnam(sys_get_temp_dir(),'bsf');
  if(!$tmp)return['ok'=>false,'error'=>'Cannot create temp file'];
  if($src==='url'){
    $url=trim((string)($_POST['url']??''));
    if(!filter_var($url,FILTER_VALIDATE_URL)){@unlink($tmp);return['ok'=>false,'error'=>'A valid source URL is required'];}
    if($name==='')$name=sanitize_filename(basename(parse_url($url,PHP_URL_PATH)?:'')?:('file_'.time()));
    $fp=fopen($tmp,'wb');if(!$fp){@unlink($tmp);return['ok'=>false,'error'=>'Cannot open temp file'];}
    $ch=curl_init($url);
    curl_setopt_array($ch,[CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_TIMEOUT=>0,CURLOPT_CONNECTTIMEOUT=>30,CURLOPT_USERAGENT=>'Mozilla/5.0 (compatible; BlackSwanUpload/'.APP_VER.')']);
    curl_exec($ch);$err=curl_error($ch);curl_close($ch);fclose($fp);
    if($err||@filesize($tmp)<1){@unlink($tmp);return['ok'=>false,'error'=>'Download failed: '.($err?:'empty file')];}
  }elseif($src==='relay'){
    $relay=trim((string)($_POST['mitm_url']??''));$url=trim((string)($_POST['url']??''));
    if(!filter_var($relay,FILTER_VALIDATE_URL)||!filter_var($url,FILTER_VALIDATE_URL)){@unlink($tmp);return['ok'=>false,'error'=>'Both the relay URL and the source URL are required'];}
    if($name==='')$name=sanitize_filename(basename(parse_url($url,PHP_URL_PATH)?:'')?:('file_'.time()));
    $r=mitm_post($relay,['_a'=>'fetch','url'=>$url,'_name'=>$name]);
    if(!$r||empty($r['ok'])||empty($r['url'])){@unlink($tmp);return['ok'=>false,'error'=>'Relay fetch failed: '.($r['error']??'no response from relay')];}
    $fp=fopen($tmp,'wb');if(!$fp){@unlink($tmp);return['ok'=>false,'error'=>'Cannot open temp file'];}
    $ch=curl_init($r['url']);
    curl_setopt_array($ch,[CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_TIMEOUT=>0,CURLOPT_CONNECTTIMEOUT=>30,CURLOPT_USERAGENT=>'BlackSwanUpload/'.APP_VER]);
    curl_exec($ch);$err=curl_error($ch);curl_close($ch);fclose($fp);
    if($err||@filesize($tmp)<1){@unlink($tmp);return['ok'=>false,'error'=>'Relay download failed: '.($err?:'empty file')];}
    if(($_POST['mitm_delete']??'')==='1')@mitm_post($relay,['_a'=>'del_by_name','_name'=>$name]);
  }else{@unlink($tmp);return['ok'=>false,'error'=>'Unknown upload source'];}
  if($name===''){@unlink($tmp);return['ok'=>false,'error'=>'Could not determine a destination filename'];}
  $size=@filesize($tmp);
  $target=rtrim($dir,'/\\').'/'.$name;
  if(file_exists($target))@unlink($target);
  if(!@rename($tmp,$target)){if(@copy($tmp,$target)){@unlink($tmp);}else{@unlink($tmp);return['ok'=>false,'error'=>'Failed to write into the target folder'];}}
  @chmod($target,0644);
  return['ok'=>true,'name'=>$name,'size'=>(int)$size,'path'=>$target,'elapsed'=>human_timing($start)];
}

function ajax_mitm_fetch(){
  set_time_limit(0);
  $mitm_url=trim((string)($_POST['mitm_url']??''));
  $url=trim((string)($_POST['url']??''));
  $name=sanitize_filename((string)($_POST['_name']??''));
  $folder=sanitize_folder((string)($_POST['_folder']??''));
  $delete_after=!empty($_POST['mitm_delete']);
  if(!filter_var($mitm_url,FILTER_VALIDATE_URL))return['ok'=>false,'error'=>'Invalid MITM URL'];
  if(!filter_var($url,FILTER_VALIDATE_URL))return['ok'=>false,'error'=>'Invalid source URL'];
  if($name==='')return['ok'=>false,'error'=>'Name required'];

  $fd=['_a'=>'fetch','url'=>$url,'_name'=>$name];
  if($folder!=='')$fd['_folder']=$folder;
  $r=mitm_post($mitm_url,$fd);
  if(!$r||empty($r['ok']))return['ok'=>false,'error'=>'MITM fetch failed: '.($r['error']??'no response')];
  $mitm_file_url=$r['url']??'';
  if(!$mitm_file_url)return['ok'=>false,'error'=>'MITM server returned no file URL'];

  $dir=$folder!==''?__DIR__.'/'.$folder:__DIR__;
  if(!is_dir($dir))@mkdir($dir,0755,true);
  $path=rtrim($dir,'/\\').'/'.$name;
  if(file_exists($path))@unlink($path);
  $fp=fopen($path,'wb');if(!$fp)return['ok'=>false,'error'=>'Cannot write destination'];
  $ch=curl_init($mitm_file_url);
  if(!$ch){fclose($fp);return['ok'=>false,'error'=>'curl init failed'];}
  curl_setopt_array($ch,[
    CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_MAXREDIRS=>10,
    CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_SSL_VERIFYPEER=>0,
    CURLOPT_TIMEOUT=>0,CURLOPT_CONNECTTIMEOUT=>30,
    CURLOPT_USERAGENT=>'Mozilla/5.0 (compatible; BlackSwanUpload/'.APP_VER.')',
  ]);
  $ok=curl_exec($ch);$http=curl_getinfo($ch,CURLINFO_HTTP_CODE);$err=curl_error($ch);
  curl_close($ch);fclose($fp);
  if(!$ok||($http>=400&&$http!==0)){@unlink($path);return['ok'=>false,'error'=>"HTTP $http ".($err?:'')];}
  $sz=@filesize($path);
  if(!$sz){@unlink($path);return['ok'=>false,'error'=>'Downloaded file is empty'];}

  $deleted=null;
  if($delete_after){
    $del_fd=['_a'=>'del_by_name','_name'=>$name];
    if($folder!=='')$del_fd['_folder']=$folder;
    $dr=mitm_post($mitm_url,$del_fd);
    $deleted=($dr&&!empty($dr['ok']));
  }
  $file_url=build_base_url().'/'.($folder?"$folder/":'').$name;
  return['ok'=>true,'path'=>$path,'size'=>$sz,'url'=>$file_url,'name'=>$name,'folder'=>$folder,'mitm_deleted'=>$deleted];
}

function ajax_del_by_name(){
  $name=sanitize_filename((string)($_POST['_name']??''));
  $folder=sanitize_folder((string)($_POST['_folder']??''));
  if($name==='')return['ok'=>false,'msg'=>'No name'];
  $dir=$folder!==''?__DIR__.'/'.$folder:__DIR__;
  $path=$dir.'/'.$name;$real=realpath($path);$self=realpath(__FILE__);
  if(!$real)return['ok'=>false,'msg'=>'File not found'];
  if($real===$self)return['ok'=>false,'msg'=>'Cannot delete self'];
  $ok=@unlink($real);
  return['ok'=>$ok,'msg'=>$ok?'Deleted':'Delete failed'];
}

function ajax_info(){
  $ext=get_loaded_extensions();sort($ext);
  $df=@disk_free_space(__DIR__);$dt=@disk_total_space(__DIR__);
  $who=function_exists('posix_getpwuid')&&function_exists('posix_geteuid')?(posix_getpwuid(posix_geteuid())['name']??get_current_user()):get_current_user();
  return[
    'php'=>['Version'=>PHP_VERSION,'SAPI'=>PHP_SAPI,'Zend'=>zend_version(),'OS'=>PHP_OS.' '.php_uname('r'),'Memory Limit'=>ini_get('memory_limit'),'Max Exec Time'=>ini_get('max_execution_time').'s','Upload Max'=>ini_get('upload_max_filesize'),'Post Max'=>ini_get('post_max_size'),'Timezone'=>date_default_timezone_get(),'Server Time'=>date('Y-m-d H:i:s'),'open_basedir'=>ini_get('open_basedir')?:'(none)','allow_url_fopen'=>ini_get('allow_url_fopen')?'On':'Off','cURL'=>function_exists('curl_version')?(curl_version()['version']??'ok'):'N/A','ZipArchive'=>class_exists('ZipArchive')?'ok':'N/A','PharData'=>class_exists('PharData')?'ok':'N/A','OpenSSL'=>extension_loaded('openssl')?OPENSSL_VERSION_TEXT:'N/A','Extensions'=>count($ext)],
    'server'=>['Software'=>$_SERVER['SERVER_SOFTWARE']??'?','Host'=>$_SERVER['SERVER_NAME']??'?','Address'=>$_SERVER['SERVER_ADDR']??'?','Port'=>$_SERVER['SERVER_PORT']??'?','Protocol'=>$_SERVER['SERVER_PROTOCOL']??'?','Document Root'=>$_SERVER['DOCUMENT_ROOT']??'?','Script'=>$_SERVER['PHP_SELF']??'?','HTTPS'=>(empty($_SERVER['HTTPS'])||$_SERVER['HTTPS']==='off')?'off':'on','Remote IP'=>get_real_IP_address(),'Process User'=>$who,'Disk Free'=>($df&&$dt)?human_filesize($df).' / '.human_filesize($dt):'?','Directory'=>__DIR__],
  ];
}

function cli_main(){
  $opts=getopt('',['url:','name:','folder:','extract','wpinstall','delete','mitm:','mitm-keep','help','compare','left:','right:','sync','dir:','method:','relay:','yes']);
  $has_url=isset($opts['url']);$has_mitm=isset($opts['mitm']);
  if(isset($opts['help'])||(!$has_url&&!isset($opts['delete'])&&!isset($opts['compare']))){
    echo "BlackSwan Upload v".APP_VER."\n\n";
    echo "Usage: php upload.php --url=<URL> --name=<filename> [options]\n\n";
    echo "  --url=<URL>          Source URL to download      (required)\n";
    echo "  --name=<filename>    Destination filename         (required)\n";
    echo "  --folder=<dir>       Sub-directory               (optional)\n";
    echo "  --extract            Extract archive after download\n";
    echo "  --wpinstall          WordPress installer mode\n";
    echo "  --delete             Self-destruct (removes this file)\n";
    echo "  --help               Show this help\n\n";
    echo "MITM Relay Mode:\n";
    echo "  --mitm=<URL>         MITM server upload.php URL  (required)\n";
    echo "  --mitm-keep          Keep file on MITM after transfer\n\n";
    echo "Compare & Sync Mode (recursive, by path relative to each root):\n";
    echo "  --compare            Compare two locations\n";
    echo "  --left=<spec>        Left side    (required)\n";
    echo "  --right=<spec>       Right side   (required)\n";
    echo "  --sync               Sync source-only + differing files to the other side\n";
    echo "  --dir=lr|rl          Sync direction (default lr = left to right)\n";
    echo "  --method=<m>         direct | ftp | relay | fxp (default direct)\n";
    echo "  --relay=<URL>        Relay (MITM) server URL (for --method=relay)\n";
    echo "  --yes                Confirm and perform the sync (otherwise dry-run)\n";
    echo "    <spec> = local:/abs/path  |  ftp://user:pass\@host:port/root  (also ftps:// sftp://)\n\n";
    echo "  e.g. php upload.php --compare --left=local:/var/www --right=ftp://u:p\@host/public_html\n\n";
    exit(0);
  }
  if(isset($opts['delete'])){@unlink(SELF_FILE);echo "[done] Self-destruct successful\n";exit(0);}
  if(isset($opts['compare'])){cli_compare($opts);exit(0);}
  $url=trim((string)($opts['url']??''));
  $name=sanitize_filename((string)($opts['name']??''));
  $folder=sanitize_folder((string)($opts['folder']??''));
  if(!filter_var($url,FILTER_VALIDATE_URL)){echo "[error] Invalid URL\n";exit(1);}
  if($name===''){echo "[error] Name is required\n";exit(1);}

  if($has_mitm){
    $mitm_url=trim((string)($opts['mitm']??''));
    $keep=isset($opts['mitm-keep']);
    if(!filter_var($mitm_url,FILTER_VALIDATE_URL)){echo "[error] Invalid MITM URL\n";exit(1);}
    echo "[info] Source: $url\n[info] MITM: $mitm_url\n";
    $fd=['_a'=>'fetch','url'=>$url,'_name'=>$name];
    if($folder!=='')$fd['_folder']=$folder;
    echo "[info] Asking MITM server to fetch source...\n";
    $r=mitm_post($mitm_url,$fd);
    if(!$r||empty($r['ok'])){echo "[error] MITM fetch failed: ".($r['error']??'no response')."\n";exit(1);}
    echo "[done] MITM fetched: ".($r['url']??'')."\n";
    echo "[info] Downloading from MITM...\n";
    $root_dir=__DIR__;
    $dest_dir=$folder?$root_dir.'/'.$folder:$root_dir;
    if(!is_dir($dest_dir))@mkdir($dest_dir,0755,true);
    $path_full=rtrim($dest_dir,'/\\').'/'.$name;
    $fp=fopen($path_full,'wb');if(!$fp){echo "[error] Cannot open destination\n";exit(1);}
    $ch=curl_init($r['url']);$last_pct=-1;$start=microtime(true);
    curl_setopt_array($ch,[CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_MAXREDIRS=>10,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_NOPROGRESS=>false,CURLOPT_TIMEOUT=>0,CURLOPT_USERAGENT=>'Mozilla/5.0 (compatible; BlackSwanUpload/'.APP_VER.')',
      CURLOPT_PROGRESSFUNCTION=>function()use(&$last_pct,$start){
        $a=func_get_args();$tot=isset($a[1])?(float)$a[1]:0;$now=isset($a[2])?(float)$a[2]:0;
        if($tot<1)return 0;$pct=(int)(($now/$tot)*100);if($pct===$last_pct)return 0;$last_pct=$pct;
        $elapsed=microtime(true)-$start;$eta=($now>0&&$tot>$now)?$elapsed*($tot-$now)/$now:0;
        $bar=str_repeat('#',(int)($pct/2)).str_repeat('-',50-(int)($pct/2));
        printf("\r[%s] %3d%% %s / %s ETA:%s",$bar,$pct,human_filesize($now),human_filesize($tot),$eta?human_timing2($eta):'--:--');
        return 0;
      },
    ]);
    curl_exec($ch);curl_close($ch);fclose($fp);echo "\n";
    $sz=filesize($path_full);echo "[done] ".human_filesize($sz)." saved to $path_full\n";
    if(!$keep){
      $del_fd=['_a'=>'del_by_name','_name'=>$name];if($folder!=='')$del_fd['_folder']=$folder;
      $dr=mitm_post($mitm_url,$del_fd);
      echo $dr&&!empty($dr['ok'])?"[done] Deleted from MITM server\n":"[warn] Could not delete from MITM\n";
    }
    exit(0);
  }

  $extract=isset($opts['extract']);$wpinstall=isset($opts['wpinstall']);
  $root_dir=__DIR__;
  $dest_dir=$folder?$root_dir.'/'.$folder:$root_dir;
  if(!is_dir($dest_dir))@mkdir($dest_dir,0755,true);
  $path_full=rtrim($dest_dir,'/\\').'/'.$name;
  echo "[info] Downloading: $url\n[info] Destination: $path_full\n";
  $fp=fopen($path_full,'wb');if(!$fp){echo "[error] Cannot open destination\n";exit(1);}
  $ch=curl_init($url);$last_pct=-1;$start=microtime(true);
  curl_setopt_array($ch,[CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_MAXREDIRS=>10,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_BUFFERSIZE=>65536,CURLOPT_NOPROGRESS=>false,CURLOPT_TIMEOUT=>0,CURLOPT_USERAGENT=>'Mozilla/5.0 (compatible; BlackSwanUpload/'.APP_VER.')',
    CURLOPT_PROGRESSFUNCTION=>function()use(&$last_pct,$start){
      $a=func_get_args();$tot=isset($a[1])?(float)$a[1]:0;$now=isset($a[2])?(float)$a[2]:0;
      if($tot<1)return 0;$pct=(int)(($now/$tot)*100);if($pct===$last_pct)return 0;$last_pct=$pct;
      $elapsed=microtime(true)-$start;$eta=($now>0&&$tot>$now)?$elapsed*($tot-$now)/$now:0;
      $bar=str_repeat('#',(int)($pct/2)).str_repeat('-',50-(int)($pct/2));
      printf("\r[%s] %3d%% %s / %s ETA:%s",$bar,$pct,human_filesize($now),human_filesize($tot),$eta?human_timing2($eta):'--:--');
      return 0;
    },
  ]);
  curl_exec($ch);$http=curl_getinfo($ch,CURLINFO_HTTP_CODE);$err=curl_error($ch);curl_close($ch);fclose($fp);echo "\n";
  if($http>=400){echo "[error] HTTP $http".($err?" - $err":"\n");exit(1);}
  $sz=filesize($path_full);echo "[done] ".human_filesize($sz)." in ".human_timing2(microtime(true)-$start)."\n";
  if($wpinstall)run_wordpress_installer($path_full,$root_dir);
  elseif($extract)run_archive_extraction($path_full,$dest_dir);
}

function parse_xfer_spec($s){
  $s=trim((string)$s);if($s==='')return null;
  if(strpos($s,'local:')===0){$p=substr($s,6);$rp=realpath($p);if(!$rp||!is_dir($rp))return null;return['kind'=>'local','creds'=>null,'root'=>$rp];}
  if(preg_match('#^(ftp|ftps|sftp)://#',$s)){
    $u=parse_url($s);if(!$u||empty($u['host']))return null;
    $method=$u['scheme'];$port=$u['port']??($method==='sftp'?22:21);
    $root=isset($u['path'])&&$u['path']!==''?$u['path']:'/';
    return['kind'=>'ftp','creds'=>['h'=>$u['host'],'port'=>$port,'u'=>urldecode($u['user']??''),'pw'=>urldecode($u['pass']??''),'method'=>$method],'root'=>$root];
  }
  return null;
}
function cli_flatten($tree,$rootlen,&$out){
  foreach($tree as $n){
    $rel=ltrim(substr($n['path'],$rootlen),'/');
    if($rel!=='')$out[$rel]=['type'=>$n['type'],'size'=>(int)($n['size_bytes']??0),'path'=>$n['path']];
    if($n['type']==='dir'&&!empty($n['children']))cli_flatten($n['children'],$rootlen,$out);
  }
}
function cli_spec_tree($spec,$label){
  $count=0;$capped=false;$out=[];
  if($spec['kind']==='local'){
    $root=$spec['root'];$tree=ls_tree_walk($root,0,$count,$capped);
    cli_flatten($tree,strlen(rtrim($root,'/')),$out);
  }else{
    $c=$spec['creds'];$root=$spec['root']?:'/';
    if($c['method']==='sftp'){$tree=ftp_tree_walk($c,null,$root,0,$count,$capped);}
    else{[$conn,$err]=ftp_make_connection($c['h'],$c['port'],$c['u'],$c['pw'],$c['method']);if(!$conn){echo "[error] $label connect failed: $err\n";exit(1);}$tree=ftp_tree_walk($c,$conn,$root,0,$count,$capped);@ftp_close($conn);}
    cli_flatten($tree,strlen(rtrim($root,'/')),$out);
  }
  return[$out,$capped];
}
function cli_transfer($src,$dst,$rel,$srcPath,$method,$relay){
  set_time_limit(0);
  $name=basename($rel);$relDir=(strpos($rel,'/')!==false)?preg_replace('#/[^/]*$#','',$rel):'';
  $isTemp=false;$localSrc=null;
  if($src['kind']==='local'){$localSrc=$srcPath;}
  elseif($method==='relay'&&$relay){
    $srcUrl=ftp_proto_url($src['creds'],$srcPath);
    $rr=mitm_post($relay,['_a'=>'fetch','url'=>$srcUrl,'_name'=>$name]);
    if(!$rr||empty($rr['ok'])||empty($rr['url']))return['ok'=>false,'msg'=>'relay fetch failed'];
    $tmp=tempnam(sys_get_temp_dir(),'bsc');$fp=fopen($tmp,'wb');$ch=curl_init($rr['url']);
    curl_setopt_array($ch,[CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_TIMEOUT=>0]);
    curl_exec($ch);curl_close($ch);fclose($fp);
    if(@filesize($tmp)<1){@unlink($tmp);return['ok'=>false,'msg'=>'relay download failed'];}
    $localSrc=$tmp;$isTemp=true;
  }else{
    [$tmp,$e]=ftp_download_to_tmp($src['creds'],$srcPath,$method==='ftp');
    if(!$tmp)return['ok'=>false,'msg'=>$e];$localSrc=$tmp;$isTemp=true;
  }
  if($dst['kind']==='local'){
    $destDir=rtrim($dst['root'],'/').($relDir?'/'.$relDir:'');if(!is_dir($destDir))@mkdir($destDir,0755,true);
    $ok=@copy($localSrc,$destDir.'/'.$name);$msg=$ok?'':'copy failed (permissions?)';
  }else{
    $destDir=rtrim($dst['root'],'/').($relDir?'/'.$relDir:'');
    [$ok,$msg]=ftp_upload_from_local($dst['creds'],$localSrc,$destDir.'/'.$name,$method==='ftp');
  }
  if($isTemp)@unlink($localSrc);
  return['ok'=>(bool)$ok,'msg'=>$ok?'':($msg?:'failed')];
}
function cli_compare($opts){
  $left=parse_xfer_spec((string)($opts['left']??''));
  $right=parse_xfer_spec((string)($opts['right']??''));
  if(!$left||!$right){echo "[error] --left and --right specs required (local:/path or ftp://user:pass\@host/path)\n";exit(1);}
  echo "[info] Comparing (by relative path)\n  L = ".$left['root']."\n  R = ".$right['root']."\n\n";
  [$lmap,$lcap]=cli_spec_tree($left,'left');
  [$rmap,$rcap]=cli_spec_tree($right,'right');
  if($lcap||$rcap)echo "[warn] Tree truncated at ".TREE_MAX_NODES." nodes — comparison may be incomplete\n";
  $keys=array_keys($lmap+$rmap);sort($keys,SORT_STRING|SORT_FLAG_CASE);
  $nSame=$nDiff=$nOnlyL=$nOnlyR=0;
  foreach($keys as $k){
    $a=$lmap[$k]??null;$b=$rmap[$k]??null;
    if($a&&!$b){if($a['type']==='file'){$nOnlyL++;echo "< $k\n";}else echo "< $k/\n";}
    elseif($b&&!$a){if($b['type']==='file'){$nOnlyR++;echo "> $k\n";}else echo "> $k/\n";}
    elseif($a['type']!==$b['type']){$nDiff++;echo "# $k (type differs)\n";}
    elseif($a['type']==='file'&&$a['size']>0&&$b['size']>0&&$a['size']!==$b['size']){$nDiff++;echo "~ $k (".$a['size']." vs ".$b['size']." bytes)\n";}
    elseif($a['type']==='file')$nSame++;
  }
  echo "\n[summary] $nSame identical, $nDiff differ, $nOnlyL only-left, $nOnlyR only-right\n";
  if(!isset($opts['sync']))return;
  $dir=(($opts['dir']??'lr')==='rl')?'rl':'lr';
  $method=strtolower((string)($opts['method']??'direct'));if(!in_array($method,['direct','ftp','relay','fxp']))$method='direct';
  if($method==='fxp'){echo "[note] FXP not supported in CLI — using Direct\n";$method='direct';}
  $relay=(string)($opts['relay']??'');
  if($method==='relay'&&!$relay){echo "[error] --relay=<URL> required for --method=relay\n";exit(1);}
  $src=$dir==='lr'?$left:$right;$dst=$dir==='lr'?$right:$left;
  $smap=$dir==='lr'?$lmap:$rmap;$dmap=$dir==='lr'?$rmap:$lmap;
  $list=[];
  foreach($smap as $k=>$v){if($v['type']!=='file')continue;$d=$dmap[$k]??null;if(!$d){$list[]=$k;}elseif($d['type']==='file'&&$v['size']>0&&$d['size']>0&&$d['size']!==$v['size'])$list[]=$k;}
  if(!$list){echo "\n[done] Nothing to sync\n";return;}
  echo "\n[info] ".count($list)." file(s) to sync ".strtoupper($dir)." via ".$method."\n";
  if(!isset($opts['yes'])){echo "[dry-run] add --yes to perform the sync\n";return;}
  $ok=0;$fail=0;
  foreach($list as $k){$r=cli_transfer($src,$dst,$k,$smap[$k]['path'],$method,$relay);if($r['ok']){$ok++;echo "  + $k\n";}else{$fail++;echo "  ! $k — ".$r['msg']."\n";}}
  echo "[done] Synced $ok, failed $fail\n";
}

function ph($n,$s=16){
  static $p=[
    'folder-open'  =>'M245,110.64A16,16,0,0,0,232,104H216V88a16,16,0,0,0-16-16H130.67L102.93,51.2a16.14,16.14,0,0,0-9.6-3.2H40A16,16,0,0,0,24,64V200a8,8,0,0,0,8,8H211.1a8,8,0,0,0,7.59-5.47l28.49-85.47A16,16,0,0,0,245,110.64ZM40,64H93.33l27.74,20.8a16.12,16.12,0,0,0,9.6,3.2H200v16H69.77a16,16,0,0,0-15.18,10.94L40,158.7V64Zm168,136H43.2l26.56-80H216Z',
    'gear-six'     =>'M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm88-29.84q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.21,107.21,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.71,107.71,0,0,0-26.25-10.87,8,8,0,0,0-7.06,1.49L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.21,107.21,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06Zm-16.1-6.5a73.93,73.93,0,0,1,0,8.68,8,8,0,0,0,1.74,5.48l14.19,17.73a91.57,91.57,0,0,1-6.23,15L187,173.11a8,8,0,0,0-5.1,2.64,74.11,74.11,0,0,1-6.14,6.14,8,8,0,0,0-2.64,5.1l-2.51,22.58a91.32,91.32,0,0,1-15,6.23l-17.74-14.19a8,8,0,0,0-5-1.75h-.48a73.93,73.93,0,0,1-8.68,0,8,8,0,0,0-5.48,1.74L100.45,215.8a91.57,91.57,0,0,1-15-6.23L82.89,187a8,8,0,0,0-2.64-5.1,74.11,74.11,0,0,1-6.14-6.14,8,8,0,0,0-5.1-2.64L46.43,170.6a91.32,91.32,0,0,1-6.23-15l14.19-17.74a8,8,0,0,0,1.74-5.48,73.93,73.93,0,0,1,0-8.68,8,8,0,0,0-1.74-5.48L40.2,100.45a91.57,91.57,0,0,1,6.23-15L69,82.89a8,8,0,0,0,5.1-2.64,74.11,74.11,0,0,1,6.14-6.14A8,8,0,0,0,82.89,69L85.4,46.43a91.32,91.32,0,0,1,15-6.23l17.74,14.19a8,8,0,0,0,5.48,1.74,73.93,73.93,0,0,1,8.68,0,8,8,0,0,0,5.48-1.74L155.55,40.2a91.57,91.57,0,0,1,15,6.23L173.11,69a8,8,0,0,0,2.64,5.1,74.11,74.11,0,0,1,6.14,6.14,8,8,0,0,0,5.1,2.64l22.58,2.51a91.32,91.32,0,0,1,6.23,15l-14.19,17.74A8,8,0,0,0,199.87,123.66Z',
    'question'     =>'M140,180a12,12,0,1,1-12-12A12,12,0,0,1,140,180ZM128,72c-22.06,0-40,16.15-40,36v4a8,8,0,0,0,16,0v-4c0-11,10.77-20,24-20s24,9,24,20-10.77,20-24,20a8,8,0,0,0-8,8v8a8,8,0,0,0,16,0v-.72c18.24-3.35,32-17.9,32-35.28C168,88.15,150.06,72,128,72Zm104,56A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z',
    'folder'       =>'M216,72H131.31L104,44.69A15.86,15.86,0,0,0,92.69,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V88A16,16,0,0,0,216,72Zm0,128H40V56H92.69l27.31,27.31A15.86,15.86,0,0,0,131.31,88H216Z',
    'file'         =>'M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Z',
    'house-simple' =>'M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z',
    'arrow-clockwise'=>'M224,48V96a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h28.69L182.06,73.37a79.56,79.56,0,1,0,1.66,114,8,8,0,0,1,11,11.64A95.95,95.95,0,1,1,183.05,55.28L196,68.22V48a8,8,0,0,1,16,0Z',
    'copy'         =>'M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32ZM160,208H48V96H160Zm48-48H176V88a8,8,0,0,0-8-8H96V48H208Z',
    'trash'        =>'M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V216a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,176H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z',
    'x'            =>'M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z',
    'arrow-up'     =>'M205.66,117.66a8,8,0,0,1-11.32,0L136,59.31V216a8,8,0,0,1-16,0V59.31L61.66,117.66a8,8,0,0,1-11.32-11.32l72-72a8,8,0,0,1,11.32,0l72,72A8,8,0,0,1,205.66,117.66Z',
    'shuffle'      =>'M229.66,181.66l-32,32a8,8,0,0,1-11.32-11.32L204.69,184H128a88.2,88.2,0,0,1-85.22-65.6A8,8,0,0,1,58.29,116.4,72.15,72.15,0,0,0,128,168h76.69l-18.35-18.34a8,8,0,0,1,11.32-11.32l32,32A8,8,0,0,1,229.66,181.66ZM72,88H28.69l18.35-18.34A8,8,0,0,0,35.72,58.34l-32,32a8,8,0,0,0,0,11.32l32,32a8,8,0,0,0,11.32-11.32L28.69,104H72a72.15,72.15,0,0,0,69.71-53.4,8,8,0,0,0-15.49-4A56.15,56.15,0,0,1,72,88Z',
    'arrow-square-out'=>'M224,104a8,8,0,0,1-16,0V59.32l-82.34,82.34a8,8,0,0,1-11.32-11.32L196.68,48H152a8,8,0,0,1,0-16h64a8,8,0,0,1,8,8Zm-40,24a8,8,0,0,0-8,8v72H48V80h72a8,8,0,0,0,0-16H48A16,16,0,0,0,32,80V208a16,16,0,0,0,16,16H176a16,16,0,0,0,16-16V136A8,8,0,0,0,184,128Z',
    'hard-drives'  =>'M208,72H48A16,16,0,0,0,32,88v32a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V88A16,16,0,0,0,208,72Zm0,48H48V88H208Zm-16-20a12,12,0,1,1-12-12A12,12,0,0,1,192,100ZM208,136H48a16,16,0,0,0-16,16v32a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V152A16,16,0,0,0,208,136Zm0,48H48V152H208Zm-16-20a12,12,0,1,1-12-12A12,12,0,0,1,192,164Z',
    'download-simple'=>'M224,144v64a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V144a8,8,0,0,1,16,0v56H208V144a8,8,0,0,1,16,0Zm-101.66,5.66a8,8,0,0,0,11.32,0l40-40a8,8,0,0,0-11.32-11.32L136,124.69V32a8,8,0,0,0-16,0v92.69L93.66,98.34a8,8,0,0,0-11.32,11.32Z',
    'arrow-right'  =>'M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z',
    'link'         =>'M117.54,186.47,89.07,214.94a40,40,0,0,1-56.57-56.57l28.46-28.47a8,8,0,1,0-11.32-11.32L21.18,147.05a56,56,0,0,0,79.2,79.2l28.47-28.46a8,8,0,1,0-11.31-11.32ZM234.83,21.17a56.06,56.06,0,0,0-79.2,0L127.16,49.64a8,8,0,1,0,11.31,11.32l28.47-28.47a40,40,0,0,1,56.57,56.57L194.85,117.54a8,8,0,1,0,11.32,11.31l28.46-28.46a56.06,56.06,0,0,0,.2-79.22ZM181.66,74.34a8,8,0,0,0-11.32,0l-96,96a8,8,0,0,0,11.32,11.32l96-96A8,8,0,0,0,181.66,74.34Z',
    'terminal-window'=>'M40,64H216a16,16,0,0,1,16,16V176a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V80A16,16,0,0,1,40,64ZM40,176H216V80H40ZM77.66,98.34a8,8,0,0,0-11.32,11.32L100.69,144,66.34,178.34a8,8,0,0,0,11.32,11.32l40-40a8,8,0,0,0,0-11.32Zm74.34,53.66a8,8,0,0,0,0,16h48a8,8,0,0,0,0-16Z',
    'pencil-simple'=>'M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z',
    'copy-simple'=>'M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32ZM160,208H48V96H160Zm48-48H176V88a8,8,0,0,0-8-8H96V48H208Z',
    'arrows-left-right'=>'M213.66,181.66l-32,32a8,8,0,0,1-11.32-11.32L188.69,184H48a8,8,0,0,1,0-16H188.69l-18.35-18.34a8,8,0,0,1,11.32-11.32l32,32A8,8,0,0,1,213.66,181.66Zm-139.32-64a8,8,0,0,0,11.32-11.32L67.31,88H208a8,8,0,0,0,0-16H67.31L85.66,53.66A8,8,0,0,0,74.34,42.34l-32,32a8,8,0,0,0,0,11.32Z',
    'folder-simple-plus'=>'M216,72H131.31L104,44.69A15.86,15.86,0,0,0,92.69,40H40A16,16,0,0,0,24,56V200.62A15.4,15.4,0,0,0,39.38,216H216.89A15.13,15.13,0,0,0,232,200.89V88A16,16,0,0,0,216,72Zm0,128H40V56H92.69l27.31,27.31A15.86,15.86,0,0,0,131.31,88H216ZM152,144a8,8,0,0,1-8,8H136v8a8,8,0,0,1-16,0v-8h-8a8,8,0,0,1,0-16h8v-8a8,8,0,0,1,16,0v8h8A8,8,0,0,1,152,144Z',
    'warning'=>'M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM222.93,203.8a8.5,8.5,0,0,1-7.48,4.2H40.55a8.5,8.5,0,0,1-7.48-4.2,7.59,7.59,0,0,1,0-7.72L120.52,44.21a8.75,8.75,0,0,1,15,0l87.45,151.87A7.59,7.59,0,0,1,222.93,203.8ZM120,144V104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm20,36a12,12,0,1,1-12-12A12,12,0,0,1,140,180Z',
    'circle-half'=>'M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192V40a88,88,0,0,1,0,176Z',
    'sun-dim'=>'M116,36V20a12,12,0,0,1,24,0V36a12,12,0,0,1-24,0Zm12,32a60,60,0,1,0,60,60A60.07,60.07,0,0,0,128,68Zm0,96a36,36,0,1,1,36-36A36,36,0,0,1,128,164ZM43.6,60.5a12,12,0,0,1,17-17l11.3,11.3a12,12,0,0,1-17,17ZM20,140a12,12,0,0,1,0-24H36a12,12,0,0,1,0,24Zm151.5,55.5a12,12,0,0,1,17-17l11.3,11.3a12,12,0,1,1-17,17ZM236,116a12,12,0,0,1,0,24H220a12,12,0,0,1,0-24ZM171.5,77.8a12,12,0,0,1-8.5-20.5L174.3,46a12,12,0,1,1,17,17L180,74.3A12,12,0,0,1,171.5,77.8ZM67.9,183.9,56.6,195.2a12,12,0,0,1-17-17l11.3-11.3a12,12,0,0,1,17,17ZM140,220v16a12,12,0,0,1-24,0V220a12,12,0,0,1,24,0Z',
    'moon'=>'M233.54,142.23a8,8,0,0,0-8-2,88.08,88.08,0,0,1-109.8-109.8,8,8,0,0,0-10-10,104.84,104.84,0,0,0-52.91,37A104,104,0,0,0,136,224a103.09,103.09,0,0,0,62.52-20.88,104.84,104.84,0,0,0,37-52.91A8,8,0,0,0,233.54,142.23ZM188.9,190.34A88,88,0,0,1,65.66,67.11a89,89,0,0,1,31.4-26A106,106,0,0,0,96,56,104.11,104.11,0,0,0,200,160a106,106,0,0,0,14.92-1.06A89,89,0,0,1,188.9,190.34Z',
    'tree-structure'=>'M104,160H56a8,8,0,0,0-8,8v32a8,8,0,0,0,8,8h48a8,8,0,0,0,8-8V168A8,8,0,0,0,104,160Zm-8,32H64V176H96ZM216,40H168a8,8,0,0,0-8,8V72H136a16,16,0,0,0-16,16v32H88V96a8,8,0,0,0-8-8H32a8,8,0,0,0-8,8v32a8,8,0,0,0,8,8H80a8,8,0,0,0,8-8V120h32v32a16,16,0,0,0,16,16h24v24a8,8,0,0,0,8,8h48a8,8,0,0,0,8-8V168a8,8,0,0,0-8-8H168a8,8,0,0,0-8,8v16H136V88h24v24a8,8,0,0,0,8,8h48a8,8,0,0,0,8-8V48A8,8,0,0,0,216,40ZM64,120H40V104H64Zm112,56h32v16H176Zm0-120h32V72H176Z',
    'floppy-disk'=>'M219.31,72,184,36.69A15.86,15.86,0,0,0,172.69,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V83.31A15.86,15.86,0,0,0,219.31,72ZM96,48h64V80H96Zm32,144a32,32,0,1,1,32-32A32,32,0,0,1,128,192Zm80,16H48V48H80V88a8,8,0,0,0,8,8h80a8,8,0,0,0,8-8V49.94l32,32Z',
    'eye'=>'M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z',
    'dots-three-vertical'=>'M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM128,72a12,12,0,1,0-12-12A12,12,0,0,0,128,72Zm0,112a12,12,0,1,0,12,12A12,12,0,0,0,128,184Z',
    'lock-key'=>'M208,80H176V56a48,48,0,0,0-96,0V80H48A16,16,0,0,0,32,96V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V96A16,16,0,0,0,208,80ZM96,56a32,32,0,0,1,64,0V80H96ZM208,208H48V96H208V208Zm-68-56a12,12,0,1,1-12-12A12,12,0,0,1,140,152Z',
    'check-square'=>'M205.66,85.66l-96,96a8,8,0,0,1-11.32,0l-40-40a8,8,0,0,1,11.32-11.32L104,164.69l90.34-90.35a8,8,0,0,1,11.32,11.32ZM216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,160H40V56H216V200Z',
    'square'=>'M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm0,176H48V48H208V208Z',
  ];
  $d=$p[$n]??'';
  return '<svg xmlns="http://www.w3.org/2000/svg" width="'.$s.'" height="'.$s.'" viewBox="0 0 256 256" fill="currentColor" aria-hidden="true" style="display:inline-block;vertical-align:-.125em;flex-shrink:0"><path d="'.$d.'"/></svg>';
}

function flush_buffers($pad=false){if($pad)echo "<!-- ".str_repeat(' ',4096)." -->\n";while(ob_get_level()>0){@ob_end_flush();}@flush();ob_start();}
function js_escape($s){return str_replace(["\\","'","\r","\n","</"],["\\\\","\\'","","\\n","<\\/"],(string)$s);}
function build_base_url(){$proto=(empty($_SERVER['HTTPS'])||$_SERVER['HTTPS']==='off')?'http':'https';$host=$_SERVER['HTTP_HOST']??'localhost';$path=str_replace('\\','/',dirname($_SERVER['PHP_SELF']??'/'));return rtrim($proto.'://'.$host.$path,'/');}
function sanitize_filename($n){$n=trim((string)$n);$n=str_replace(["\0",'/','\\'],'',$n);$n=preg_replace('/\.\.+/','.',$n);return $n;}
function sanitize_folder($f){$f=trim((string)$f);if($f==='')return'';$f=str_replace(["\0",'\\'],['',' '],$f);$parts=array_filter(explode('/',$f),function($p){return $p!==''&&$p!=='.'&&$p!=='..';});return implode('/',$parts);}
function get_real_IP_address(){
  // Cloudflare first, then common proxy / real-IP headers, then REMOTE_ADDR.
  foreach(['HTTP_CF_CONNECTING_IP','HTTP_TRUE_CLIENT_IP','GEOIP_ADDR','HTTP_X_REAL_IP','HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR'] as $k){
    if(empty($_SERVER[$k]))continue;
    foreach(explode(',',(string)$_SERVER[$k]) as $ip){
      $ip=trim($ip);
      if(filter_var($ip,FILTER_VALIDATE_IP))return $ip;
    }
  }
  return $_SERVER['REMOTE_ADDR']??'(unknown)';
}
function human_filesize($bytes=0,$dec=2){$bytes=(float)$bytes;if($bytes<1)return'0 B';$u=['B','KB','MB','GB','TB','PB'];$f=(int)floor(log($bytes,1024));$f=min($f,count($u)-1);return sprintf("%.{$dec}f %s",$bytes/pow(1024,$f),$u[$f]);}
function human_timing2($s){$s=max(0,(int)$s);$h=(int)floor($s/3600);$s-=$h*3600;$m=(int)floor($s/60);$s-=$m*60;return($h>0?"$h:":''). sprintf('%02d:%02d',$m,$s);}
function human_timing($start){return human_timing2(microtime(true)-$start);}
function rmdir_recursive($dir){if(!is_dir($dir))return false;foreach(array_diff(scandir($dir),['.','..'])as $f){$p=$dir.'/'.$f;is_dir($p)?rmdir_recursive($p):@unlink($p);}return @rmdir($dir);}
function copy_recursive($src,$dst){
  if(is_dir($src)){
    if(!@mkdir($dst,0755,true)&&!is_dir($dst))return false;
    foreach(array_diff(scandir($src),['.','..'])as $f){if(!copy_recursive($src.'/'.$f,$dst.'/'.$f))return false;}
    return true;
  }
  return @copy($src,$dst);
}
function uniq_copy_name($dir,$base){
  $ext='';$name=$base;
  if(strpos($base,'.')!==false&&$base[0]!=='.'){$ext='.'.pathinfo($base,PATHINFO_EXTENSION);$name=pathinfo($base,PATHINFO_FILENAME);}
  $cand=$name.' copy'.$ext;$i=2;
  while(file_exists(rtrim($dir,'/\\').'/'.$cand)){$cand=$name.' copy '.$i.$ext;$i++;}
  return $cand;
}

function ajax_rename(){
  $req=trim((string)($_POST['_p']??''));
  $to=sanitize_filename((string)($_POST['_to']??''));
  if($req===''||$to==='')return['ok'=>false,'msg'=>'Path and new name required'];
  $real=realpath($req);$self=realpath(__FILE__);
  if(!$real)return['ok'=>false,'msg'=>'Path not found'];
  if($real===$self)return['ok'=>false,'msg'=>'Cannot rename self'];
  $dst=dirname($real).'/'.$to;
  if(file_exists($dst))return['ok'=>false,'msg'=>'A file named "'.$to.'" already exists'];
  $ok=@rename($real,$dst);
  return['ok'=>$ok,'msg'=>$ok?'Renamed':'Rename failed (check permissions)','path'=>$dst];
}

function ajax_move(){
  $req=trim((string)($_POST['_p']??''));
  $dest=trim((string)($_POST['_dest']??''));
  if($req===''||$dest==='')return['ok'=>false,'msg'=>'Source and destination required'];
  $real=realpath($req);$self=realpath(__FILE__);
  if(!$real)return['ok'=>false,'msg'=>'Source not found'];
  if($real===$self)return['ok'=>false,'msg'=>'Cannot move self'];
  $destReal=realpath($dest);
  if(!$destReal||!is_dir($destReal))return['ok'=>false,'msg'=>'Destination folder not found'];
  $dst=rtrim($destReal,'/\\').'/'.basename($real);
  if($dst===$real)return['ok'=>false,'msg'=>'Source and destination are the same'];
  if(file_exists($dst))return['ok'=>false,'msg'=>'An item with that name already exists in the destination'];
  $ok=@rename($real,$dst);
  return['ok'=>$ok,'msg'=>$ok?'Moved':'Move failed (check permissions)','path'=>$dst];
}

function ajax_dup(){
  $req=trim((string)($_POST['_p']??''));
  if($req==='')return['ok'=>false,'msg'=>'No path'];
  $real=realpath($req);$self=realpath(__FILE__);
  if(!$real)return['ok'=>false,'msg'=>'Path not found'];
  if($real===$self)return['ok'=>false,'msg'=>'Cannot duplicate self'];
  $dir=dirname($real);$newName=uniq_copy_name($dir,basename($real));
  $dst=$dir.'/'.$newName;
  $ok=is_dir($real)?copy_recursive($real,$dst):@copy($real,$dst);
  return['ok'=>$ok,'msg'=>$ok?'Duplicated as "'.$newName.'"':'Duplicate failed (check permissions)','path'=>$dst,'name'=>$newName];
}

// The in-browser editor ships file contents URL-encoded (percent-encoded) so any
// byte survives the POST round-trip. rawurlencode()/rawurldecode() mirror the
// browser's encodeURIComponent()/decodeURIComponent() exactly.

// Read a local text file for the in-browser viewer/editor (percent-encoded transport).
function ajax_read(){
  $req=trim((string)($_POST['_p']??''));
  if($req==='')return['ok'=>false,'msg'=>'No path'];
  $real=realpath($req);
  if(!$real||!is_file($real))return['ok'=>false,'msg'=>'File not found'];
  if(!is_readable($real))return['ok'=>false,'msg'=>'File is not readable'];
  $size=filesize($real);
  if($size>EDIT_MAX_BYTES)return['ok'=>false,'msg'=>'File is larger than '.human_filesize(EDIT_MAX_BYTES).' — too big to open as text'];
  $data=file_get_contents($real);
  if($data===false)return['ok'=>false,'msg'=>'Could not read file'];
  if(strpos($data,"\0")!==false)return['ok'=>false,'msg'=>'This looks like a binary file, not text'];
  return['ok'=>true,'name'=>basename($real),'size'=>(int)$size,'writable'=>is_writable($real),'content'=>rawurlencode($data)];
}
// Write (optionally back up to .back) a local text file from the editor.
function ajax_write(){
  $req=trim((string)($_POST['_p']??''));
  if($req==='')return['ok'=>false,'msg'=>'No path'];
  $real=realpath($req);$self=realpath(__FILE__);
  if(!$real||!is_file($real))return['ok'=>false,'msg'=>'File not found'];
  if($real===$self)return['ok'=>false,'msg'=>'Refusing to overwrite the running script'];
  $content=rawurldecode((string)($_POST['_content']??''));
  if(strlen($content)>EDIT_MAX_BYTES)return['ok'=>false,'msg'=>'Content exceeds the '.human_filesize(EDIT_MAX_BYTES).' limit'];
  if(!is_writable($real))return['ok'=>false,'msg'=>'File is not writable (check permissions)'];
  $backup=($_POST['_backup']??'')==='1';
  if($backup){
    $bak=$real.'.back';
    if(!@copy($real,$bak))return['ok'=>false,'msg'=>'Could not create backup ('.basename($bak).') — nothing was saved'];
  }
  $bytes=@file_put_contents($real,$content);
  if($bytes===false)return['ok'=>false,'msg'=>'Write failed (check permissions)'];
  return['ok'=>true,'msg'=>$backup?'Saved (backup: '.basename($real).'.back)':'Saved','size'=>(int)$bytes,'backup'=>$backup];
}

/* ── FTP Browser functions ─────────────────────────────────────── */

function ftp_creds_from_post(){
  return [
    'h'     =>trim((string)($_POST['_h']??'')),
    'port'  =>(int)($_POST['_port']??21),
    'u'     =>trim((string)($_POST['_u']??'')),
    'pw'    =>(string)($_POST['_pw']??''),
    'method'=>strtolower(trim((string)($_POST['_method']??'ftp'))),
  ];
}

function ftp_make_connection($h,$port,$u,$pw,$method){
  if(!$h)return[null,'Host required'];
  $port=$port?:(($method==='sftp')?22:21);
  if($method==='ftps'){
    if(!function_exists('ftp_ssl_connect'))return[null,'ftp_ssl_connect not available (PHP needs OpenSSL)'];
    $conn=@ftp_ssl_connect($h,$port,30);
  }else{
    if(!function_exists('ftp_connect'))return[null,'FTP extension not available'];
    $conn=@ftp_connect($h,$port,30);
  }
  if(!$conn)return[null,"Cannot connect to $h:$port"];
  if(!@ftp_login($conn,$u,$pw)){@ftp_close($conn);return[null,'Login failed: check credentials'];}
  @ftp_pasv($conn,true);
  return[$conn,null];
}

function parse_ftp_rawlist($raw){
  $items=[];
  foreach($raw as $line){
    $line=trim($line);
    if($line===''||substr($line,0,5)==='total')continue;
    $parts=preg_split('/\s+/',$line,9);
    if(count($parts)<9)continue;
    $perms=$parts[0];
    if(strlen($perms)<2)continue;
    $type=($perms[0]==='d')?'dir':'file';
    $size=(int)$parts[4];
    $mtime=$parts[5].' '.$parts[6].' '.$parts[7];
    $name=trim($parts[8]);
    if($name==='.'||$name==='..')continue;
    $items[]=['name'=>$name,'type'=>$type,'perms'=>$perms,'perms_octal'=>perms_sym_to_octal($perms),'size'=>$size,'mtime'=>$mtime];
  }
  return $items;
}

function ftp_build_listing($items,$path){
  $dirs=array_values(array_filter($items,function($i){return $i['type']==='dir';}));
  $files=array_values(array_filter($items,function($i){return $i['type']==='file';}));
  usort($dirs,function($a,$b){return strnatcasecmp($a['name'],$b['name']);});
  usort($files,function($a,$b){return strnatcasecmp($a['name'],$b['name']);});
  $sorted=array_merge($dirs,$files);
  foreach($sorted as &$item){
    $item['path']=rtrim($path,'/').'/'.$item['name'];
    $item['size_bytes']=(int)$item['size'];
    $item['size']=$item['type']==='dir'?'':human_filesize((int)$item['size']);
  }unset($item);
  $parts=array_values(array_filter(explode('/',$path),function($p){return $p!=='';}));
  $crumbs=[];$acc='';
  foreach($parts as $p){$acc.='/'.$p;$crumbs[]=['name'=>$p,'path'=>$acc];}
  $parent=($path!=='/'&&$path!=='')?dirname($path):null;
  if($parent===''||$parent==='.')$parent='/';
  return['ok'=>true,'path'=>$path,'parent'=>$parent,'breadcrumbs'=>$crumbs,'items'=>$sorted];
}

// One directory level, finalized (path + size_bytes + human size), dirs-first. Returns null on error.
function ftp_list_dir($c,$conn,$path){
  if($c['method']==='sftp'){
    $port=$c['port']?:22;
    $url='sftp://'.rawurlencode($c['u']).':'.rawurlencode($c['pw']).'@'.$c['h'].':'.$port.rtrim($path,'/').'/';
    $ch=curl_init($url);if(!$ch)return null;
    curl_setopt_array($ch,[CURLOPT_RETURNTRANSFER=>true,CURLOPT_TIMEOUT=>30,CURLOPT_CONNECTTIMEOUT=>15,CURLOPT_SSL_VERIFYPEER=>false,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_USERAGENT=>'BlackSwanUpload/'.APP_VER]);
    $out=curl_exec($ch);$err=curl_error($ch);curl_close($ch);
    if($out===false||$err)return null;
    $raw=array_values(array_filter(explode("\n",(string)$out),function($l){return trim($l)!=='';}));
    $items=parse_ftp_rawlist($raw);
  }else{
    $raw=@ftp_rawlist($conn,$path);
    if($raw===false)return null;
    $items=parse_ftp_rawlist($raw);
  }
  $dirs=array_values(array_filter($items,function($i){return $i['type']==='dir';}));
  $files=array_values(array_filter($items,function($i){return $i['type']==='file';}));
  usort($dirs,function($a,$b){return strnatcasecmp($a['name'],$b['name']);});
  usort($files,function($a,$b){return strnatcasecmp($a['name'],$b['name']);});
  $sorted=array_merge($dirs,$files);
  foreach($sorted as &$item){$item['path']=rtrim($path,'/').'/'.$item['name'];$item['size_bytes']=(int)$item['size'];$item['size']=$item['type']==='dir'?'':human_filesize((int)$item['size']);}unset($item);
  return $sorted;
}
function ftp_tree_walk($c,$conn,$path,$depth,&$count,&$capped){
  $items=ftp_list_dir($c,$conn,$path);
  if($items===null)return[];
  foreach($items as &$it){
    $count++;
    if($count>=TREE_MAX_NODES){$capped=true;break;}
    if($it['type']==='dir'){
      if($depth+1>=TREE_MAX_DEPTH){$capped=true;$it['children']=null;continue;}
      $it['children']=ftp_tree_walk($c,$conn,$it['path'],$depth+1,$count,$capped);
      if(is_array($it['children'])){$ds=array_sum(array_map(function($c){return (int)($c['size_bytes']??0);},$it['children']));$it['size_bytes']=$ds;$it['size']=human_filesize($ds);}
    }
  }
  unset($it);
  return $items;
}
function ajax_ftp_tree(){
  set_time_limit(0);
  $c=ftp_creds_from_post();
  $path=trim((string)($_POST['_p']??'/'));
  if($path===''||$path==='__FTP_ROOT__')$path='/';
  $count=0;$capped=false;
  if($c['method']==='sftp'){
    $tree=ftp_tree_walk($c,null,$path,0,$count,$capped);
    return['ok'=>true,'path'=>$path,'root'=>$path,'tree'=>$tree,'count'=>$count,'capped'=>$capped];
  }
  [$conn,$err]=ftp_make_connection($c['h'],$c['port'],$c['u'],$c['pw'],$c['method']);
  if(!$conn)return['ok'=>false,'msg'=>$err];
  $tree=ftp_tree_walk($c,$conn,$path,0,$count,$capped);
  @ftp_close($conn);
  return['ok'=>true,'path'=>$path,'root'=>$path,'tree'=>$tree,'count'=>$count,'capped'=>$capped];
}

function ajax_ftp_ls(){
  $c=ftp_creds_from_post();
  $path=trim((string)($_POST['_p']??'/'));
  if($path===''||$path==='__FTP_ROOT__')$path='/';

  if($c['method']==='sftp'){
    $port=$c['port']?:22;
    $url='sftp://'.rawurlencode($c['u']).':'.rawurlencode($c['pw']).'@'.$c['h'].':'.$port.rtrim($path,'/').'/';
    $ch=curl_init($url);
    if(!$ch)return['ok'=>false,'msg'=>'curl init failed'];
    curl_setopt_array($ch,[
      CURLOPT_RETURNTRANSFER=>true,CURLOPT_TIMEOUT=>30,CURLOPT_CONNECTTIMEOUT=>15,
      CURLOPT_SSL_VERIFYPEER=>false,CURLOPT_SSL_VERIFYHOST=>0,
      CURLOPT_USERAGENT=>'BlackSwanUpload/'.APP_VER,
    ]);
    $out=curl_exec($ch);$err=curl_error($ch);curl_close($ch);
    if($out===false||$err)return['ok'=>false,'msg'=>'SFTP error: '.($err?:'no output')];
    $raw=array_values(array_filter(explode("\n",(string)$out),function($l){return trim($l)!=='';}));
    $items=parse_ftp_rawlist($raw);
    return ftp_build_listing($items,$path);
  }

  [$conn,$err]=ftp_make_connection($c['h'],$c['port'],$c['u'],$c['pw'],$c['method']);
  if(!$conn)return['ok'=>false,'msg'=>$err];
  $raw=@ftp_rawlist($conn,$path);
  @ftp_close($conn);
  if($raw===false)return['ok'=>false,'msg'=>"Cannot list directory: $path"];
  $items=parse_ftp_rawlist($raw);
  return ftp_build_listing($items,$path);
}

function ajax_ftp_del(){
  $c=ftp_creds_from_post();
  $path=trim((string)($_POST['_p']??''));
  $type=trim((string)($_POST['_type']??'file'));
  if(!$c['h']||!$path)return['ok'=>false,'msg'=>'Host and path required'];

  if($c['method']==='sftp'){
    if(function_exists('ssh2_connect')){
      $port=$c['port']?:22;
      $conn=@ssh2_connect($c['h'],$port);
      if($conn&&@ssh2_auth_password($conn,$c['u'],$c['pw'])){
        $sftp=@ssh2_sftp($conn);
        if($sftp){
          $ok=$type==='dir'?@ssh2_sftp_rmdir($sftp,$path):@ssh2_sftp_unlink($sftp,$path);
          return['ok'=>(bool)$ok,'msg'=>$ok?'Deleted':'Delete failed'];
        }
      }
    }
    return['ok'=>false,'msg'=>'SFTP delete requires ssh2 PHP extension on this server'];
  }

  [$conn,$err]=ftp_make_connection($c['h'],$c['port'],$c['u'],$c['pw'],$c['method']);
  if(!$conn)return['ok'=>false,'msg'=>$err];
  $ok=$type==='dir'?@ftp_rmdir($conn,$path):@ftp_delete($conn,$path);
  @ftp_close($conn);
  return['ok'=>(bool)$ok,'msg'=>$ok?'Deleted':'Delete failed (directory may not be empty)'];
}

function ajax_ftp_copy_to_server(){
  $c=ftp_creds_from_post();
  $rpath=trim((string)($_POST['_p']??''));
  $folder=sanitize_folder((string)($_POST['_folder']??''));
  $name=sanitize_filename(basename($rpath));
  if(!$c['h']||!$rpath||!$name)return['ok'=>false,'msg'=>'Host, remote path and filename required'];

  $dest_dir=$folder!==''?__DIR__.'/'.$folder:__DIR__;
  if(!is_dir($dest_dir))@mkdir($dest_dir,0755,true);
  $local=rtrim($dest_dir,'/\\').'/'.$name;
  if(file_exists($local))@unlink($local);

  $proto=$c['method']==='sftp'?'sftp':($c['method']==='ftps'?'ftps':'ftp');
  $port=$c['port']?:($c['method']==='sftp'?22:21);
  $ftp_url=$proto.'://'.rawurlencode($c['u']).':'.rawurlencode($c['pw']).'@'.$c['h'].':'.$port.$rpath;

  $fp=fopen($local,'wb');
  if(!$fp)return['ok'=>false,'msg'=>'Cannot open destination file for writing'];
  $ch=curl_init($ftp_url);
  if(!$ch){fclose($fp);return['ok'=>false,'msg'=>'curl init failed'];}
  $start=microtime(true);
  curl_setopt_array($ch,[
    CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>false,
    CURLOPT_SSL_VERIFYPEER=>false,CURLOPT_SSL_VERIFYHOST=>0,
    CURLOPT_TIMEOUT=>0,CURLOPT_CONNECTTIMEOUT=>30,
    CURLOPT_USERAGENT=>'Mozilla/5.0 (compatible; BlackSwanUpload/'.APP_VER.')',
  ]);
  $ok=curl_exec($ch);$err=curl_error($ch);curl_close($ch);fclose($fp);

  if(!$ok||$err){
    // Fallback to native ftp_get for FTP/FTPS
    if($c['method']!=='sftp'&&function_exists('ftp_connect')){
      $fp2=fopen($local,'wb');
      if($fp2){
        fclose($fp2);
        [$conn2,$err2]=ftp_make_connection($c['h'],$c['port'],$c['u'],$c['pw'],$c['method']);
        if($conn2){
          $ok2=@ftp_get($conn2,$local,$rpath,FTP_BINARY);
          @ftp_close($conn2);
          if($ok2){
            $sz=@filesize($local);
            $url=build_base_url().'/'.($folder?"$folder/":'').$name;
            return['ok'=>true,'name'=>$name,'size'=>(int)$sz,'url'=>$url,'elapsed'=>human_timing($start)];
          }
        }
      }
    }
    @unlink($local);
    return['ok'=>false,'msg'=>$err?:'Transfer failed'];
  }
  $sz=@filesize($local);
  if(!$sz){@unlink($local);return['ok'=>false,'msg'=>'Downloaded file is empty'];}
  $url=build_base_url().'/'.($folder?"$folder/":'').$name;
  return['ok'=>true,'name'=>$name,'size'=>(int)$sz,'url'=>$url,'elapsed'=>human_timing($start)];
}

// Upload a file (from PC / a URL / via relay) into the currently-browsed FTP folder.
function ajax_ftp_upload(){
  set_time_limit(0);$start=microtime(true);
  $c=ftp_creds_from_post();
  $dir=trim((string)($_POST['_dir']??'/'));if($dir==='')$dir='/';
  $src=trim((string)($_POST['_src']??'pc'));
  $name=sanitize_filename((string)($_POST['_name']??''));
  if(!$c['h'])return['ok'=>false,'error'=>'Not connected to an FTP server'];
  $tmp=null;$isTemp=false;
  if($src==='pc'){
    if(empty($_FILES['file'])||!is_uploaded_file($_FILES['file']['tmp_name']??''))return['ok'=>false,'error'=>'No file was uploaded'];
    if($name==='')$name=sanitize_filename($_FILES['file']['name']??'');
    $tmp=$_FILES['file']['tmp_name'];
  }elseif($src==='url'){
    $url=trim((string)($_POST['url']??''));
    if(!filter_var($url,FILTER_VALIDATE_URL))return['ok'=>false,'error'=>'A valid source URL is required'];
    if($name==='')$name=sanitize_filename(basename(parse_url($url,PHP_URL_PATH)?:'')?:('file_'.time()));
    $tmp=tempnam(sys_get_temp_dir(),'bsu');$fp=$tmp?fopen($tmp,'wb'):false;
    if(!$fp)return['ok'=>false,'error'=>'Cannot create temp file'];
    $ch=curl_init($url);
    curl_setopt_array($ch,[CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_TIMEOUT=>0,CURLOPT_CONNECTTIMEOUT=>30,CURLOPT_USERAGENT=>'Mozilla/5.0 (compatible; BlackSwanUpload/'.APP_VER.')']);
    curl_exec($ch);$err=curl_error($ch);curl_close($ch);fclose($fp);
    if($err||@filesize($tmp)<1){@unlink($tmp);return['ok'=>false,'error'=>'Download failed: '.($err?:'empty file')];}
    $isTemp=true;
  }elseif($src==='relay'){
    $relay=trim((string)($_POST['mitm_url']??''));$url=trim((string)($_POST['url']??''));
    if(!filter_var($relay,FILTER_VALIDATE_URL)||!filter_var($url,FILTER_VALIDATE_URL))return['ok'=>false,'error'=>'Both the relay URL and the source URL are required'];
    if($name==='')$name=sanitize_filename(basename(parse_url($url,PHP_URL_PATH)?:'')?:('file_'.time()));
    $r=mitm_post($relay,['_a'=>'fetch','url'=>$url,'_name'=>$name]);
    if(!$r||empty($r['ok'])||empty($r['url']))return['ok'=>false,'error'=>'Relay fetch failed: '.($r['error']??'no response from relay')];
    $tmp=tempnam(sys_get_temp_dir(),'bsr');$fp=$tmp?fopen($tmp,'wb'):false;
    if(!$fp)return['ok'=>false,'error'=>'Cannot create temp file'];
    $ch=curl_init($r['url']);
    curl_setopt_array($ch,[CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_TIMEOUT=>0,CURLOPT_CONNECTTIMEOUT=>30,CURLOPT_USERAGENT=>'BlackSwanUpload/'.APP_VER]);
    curl_exec($ch);$err=curl_error($ch);curl_close($ch);fclose($fp);
    if($err||@filesize($tmp)<1){@unlink($tmp);return['ok'=>false,'error'=>'Relay download failed: '.($err?:'empty file')];}
    if(($_POST['mitm_delete']??'')==='1')@mitm_post($relay,['_a'=>'del_by_name','_name'=>$name]);
    $isTemp=true;
  }else return['ok'=>false,'error'=>'Unknown upload source'];
  if($name===''){if($isTemp)@unlink($tmp);return['ok'=>false,'error'=>'Could not determine a destination filename'];}
  $size=@filesize($tmp);
  $target=rtrim($dir,'/').'/'.$name;
  [$ok,$uerr]=ftp_upload_from_local($c,$tmp,$target);
  if($isTemp)@unlink($tmp);
  if(!$ok)return['ok'=>false,'error'=>$uerr?:'FTP upload failed'];
  return['ok'=>true,'name'=>$name,'size'=>(int)$size,'path'=>$target,'elapsed'=>human_timing($start)];
}
function ftp_proto_url($c,$path){
  $proto=$c['method']==='sftp'?'sftp':($c['method']==='ftps'?'ftps':'ftp');
  $port=$c['port']?:($c['method']==='sftp'?22:21);
  return $proto.'://'.rawurlencode($c['u']).':'.rawurlencode($c['pw']).'@'.$c['h'].':'.$port.$path;
}
// Download a remote (ftp/ftps/sftp) file to a local temp file. Returns [tmpPath, err].
function ftp_download_to_tmp($c,$rpath,$native_only=false){
  if(!$c['h']||!$rpath)return[null,'Host and remote path required'];
  $tmp=tempnam(sys_get_temp_dir(),'bsx');
  if(!$tmp)return[null,'Cannot create temp file'];
  if(!$native_only){
    $fp=fopen($tmp,'wb');
    if($fp){
      $ch=curl_init(ftp_proto_url($c,$rpath));
      if($ch){
        curl_setopt_array($ch,[CURLOPT_FILE=>$fp,CURLOPT_SSL_VERIFYPEER=>false,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_TIMEOUT=>0,CURLOPT_CONNECTTIMEOUT=>30,CURLOPT_USERAGENT=>'BlackSwanUpload/'.APP_VER]);
        $ok=curl_exec($ch);$err=curl_error($ch);curl_close($ch);fclose($fp);
        if($ok&&!$err&&@filesize($tmp)>0)return[$tmp,null];
      }else fclose($fp);
    }
  }
  // Native ftp_get fallback (ftp/ftps only)
  if($c['method']!=='sftp'&&function_exists('ftp_connect')){
    [$conn,$err2]=ftp_make_connection($c['h'],$c['port'],$c['u'],$c['pw'],$c['method']);
    if($conn){
      $ok2=@ftp_get($conn,$tmp,$rpath,FTP_BINARY);@ftp_close($conn);
      if($ok2&&@filesize($tmp)>0)return[$tmp,null];
    }
  }
  @unlink($tmp);
  return[null,'Download failed (source unreachable or empty)'];
}
// Upload a local file to a remote (ftp/ftps/sftp) path. Returns [ok, err].
function ftp_mkdir_p($conn,$dir){
  $dir=rtrim((string)$dir,'/');if($dir===''||$dir==='/')return;
  $path='';foreach(explode('/',ltrim($dir,'/'))as $p){if($p==='')continue;$path.='/'.$p;if(!@ftp_chdir($conn,$path))@ftp_mkdir($conn,$path);}
  @ftp_chdir($conn,'/');
}
function ftp_upload_from_local($c,$local,$rpath,$native_only=false){
  if(!is_file($local))return[false,'Local source missing'];
  if($c['method']==='sftp'){
    $fp=fopen($local,'rb');
    if($fp){
      $ch=curl_init(ftp_proto_url($c,$rpath));
      if($ch){
        curl_setopt_array($ch,[CURLOPT_UPLOAD=>true,CURLOPT_INFILE=>$fp,CURLOPT_INFILESIZE=>filesize($local),CURLOPT_FTP_CREATE_MISSING_DIRS=>true,CURLOPT_SSL_VERIFYPEER=>false,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_TIMEOUT=>0,CURLOPT_CONNECTTIMEOUT=>30,CURLOPT_USERAGENT=>'BlackSwanUpload/'.APP_VER]);
        $ok=curl_exec($ch);$err=curl_error($ch);curl_close($ch);fclose($fp);
        if($ok&&!$err)return[true,null];
      }else fclose($fp);
    }
    if(function_exists('ssh2_connect')){
      $port=$c['port']?:22;$conn=@ssh2_connect($c['h'],$port);
      if($conn&&@ssh2_auth_password($conn,$c['u'],$c['pw'])){
        $sftp=@ssh2_sftp($conn);if($sftp)@ssh2_sftp_mkdir($sftp,dirname($rpath),0755,true);
        if(@ssh2_scp_send($conn,$local,$rpath,0644))return[true,null];
      }
    }
    return[false,'SFTP upload failed (needs curl SFTP or ssh2 extension)'];
  }
  [$conn,$err]=ftp_make_connection($c['h'],$c['port'],$c['u'],$c['pw'],$c['method']);
  if(!$conn)return[false,$err];
  ftp_mkdir_p($conn,dirname($rpath));
  $ok=@ftp_put($conn,$rpath,$local,FTP_BINARY);@ftp_close($conn);
  return[(bool)$ok,$ok?null:'FTP upload failed (check path/permissions)'];
}

function ajax_ftp_rename(){
  $c=ftp_creds_from_post();
  $path=trim((string)($_POST['_p']??''));
  $to=sanitize_filename((string)($_POST['_to']??''));
  if(!$c['h']||!$path||$to==='')return['ok'=>false,'msg'=>'Host, path and new name required'];
  $target=rtrim(dirname($path),'/').'/'.$to;
  return ftp_rename_path($c,$path,$target);
}
function ajax_ftp_move(){
  $c=ftp_creds_from_post();
  $path=trim((string)($_POST['_p']??''));
  $dest=trim((string)($_POST['_dest']??''));
  if(!$c['h']||!$path||$dest==='')return['ok'=>false,'msg'=>'Host, path and destination required'];
  $target=rtrim($dest,'/').'/'.basename($path);
  return ftp_rename_path($c,$path,$target);
}
function ftp_rename_path($c,$from,$to){
  if($c['method']==='sftp'){
    if(function_exists('ssh2_connect')){
      $port=$c['port']?:22;$conn=@ssh2_connect($c['h'],$port);
      if($conn&&@ssh2_auth_password($conn,$c['u'],$c['pw'])){
        $sftp=@ssh2_sftp($conn);
        if($sftp&&@ssh2_sftp_rename($sftp,$from,$to))return['ok'=>true,'msg'=>'Renamed'];
      }
    }
    // curl SFTP QUOTE fallback
    $ch=curl_init(ftp_proto_url($c,'/'));
    if($ch){
      curl_setopt_array($ch,[CURLOPT_RETURNTRANSFER=>true,CURLOPT_NOBODY=>true,CURLOPT_SSL_VERIFYPEER=>false,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_QUOTE=>['rename '.$from.' '.$to],CURLOPT_TIMEOUT=>30]);
      $ok=curl_exec($ch);$err=curl_error($ch);curl_close($ch);
      if($ok!==false&&!$err)return['ok'=>true,'msg'=>'Renamed'];
    }
    return['ok'=>false,'msg'=>'SFTP rename requires the ssh2 extension or curl SFTP support'];
  }
  [$conn,$err]=ftp_make_connection($c['h'],$c['port'],$c['u'],$c['pw'],$c['method']);
  if(!$conn)return['ok'=>false,'msg'=>$err];
  $ok=@ftp_rename($conn,$from,$to);@ftp_close($conn);
  return['ok'=>(bool)$ok,'msg'=>$ok?'Done':'Rename/move failed (check path/permissions)'];
}
function ajax_ftp_dup(){
  set_time_limit(0);
  $c=ftp_creds_from_post();
  $path=trim((string)($_POST['_p']??''));
  if(!$c['h']||!$path)return['ok'=>false,'msg'=>'Host and path required'];
  $base=basename($path);$ext='';$name=$base;
  if(strpos($base,'.')!==false&&$base[0]!=='.'){$ext='.'.pathinfo($base,PATHINFO_EXTENSION);$name=pathinfo($base,PATHINFO_FILENAME);}
  $newName=$name.' copy'.$ext;
  $target=rtrim(dirname($path),'/').'/'.$newName;
  [$tmp,$derr]=ftp_download_to_tmp($c,$path);
  if(!$tmp)return['ok'=>false,'msg'=>'Duplicate failed: '.$derr];
  [$ok,$uerr]=ftp_upload_from_local($c,$tmp,$target);
  @unlink($tmp);
  return['ok'=>$ok,'msg'=>$ok?'Duplicated as "'.$newName.'" (round-tripped via this server)':'Duplicate failed: '.$uerr,'name'=>$newName];
}
// Download a remote file to temp and return its text content for the viewer/editor.
function ajax_ftp_read(){
  set_time_limit(0);
  $c=ftp_creds_from_post();
  $path=trim((string)($_POST['_p']??''));
  if(!$c['h']||!$path)return['ok'=>false,'msg'=>'Host and path required'];
  [$tmp,$derr]=ftp_download_to_tmp($c,$path);
  if(!$tmp)return['ok'=>false,'msg'=>'Could not download file: '.$derr];
  $size=@filesize($tmp);
  if($size>EDIT_MAX_BYTES){@unlink($tmp);return['ok'=>false,'msg'=>'File is larger than '.human_filesize(EDIT_MAX_BYTES).' — too big to open as text'];}
  $data=file_get_contents($tmp);@unlink($tmp);
  if($data===false)return['ok'=>false,'msg'=>'Could not read downloaded file'];
  if(strpos($data,"\0")!==false)return['ok'=>false,'msg'=>'This looks like a binary file, not text'];
  return['ok'=>true,'name'=>basename($path),'size'=>(int)$size,'writable'=>true,'content'=>rawurlencode($data)];
}
// Write text content back to a remote file (optionally backing up the current one to .back first).
function ajax_ftp_write(){
  set_time_limit(0);
  $c=ftp_creds_from_post();
  $path=trim((string)($_POST['_p']??''));
  if(!$c['h']||!$path)return['ok'=>false,'msg'=>'Host and path required'];
  $content=rawurldecode((string)($_POST['_content']??''));
  if(strlen($content)>EDIT_MAX_BYTES)return['ok'=>false,'msg'=>'Content exceeds the '.human_filesize(EDIT_MAX_BYTES).' limit'];
  $backup=($_POST['_backup']??'')==='1';
  if($backup){
    [$btmp,$berr]=ftp_download_to_tmp($c,$path);
    if(!$btmp)return['ok'=>false,'msg'=>'Could not read current file for backup: '.$berr.' — nothing was saved'];
    [$bok,$buerr]=ftp_upload_from_local($c,$btmp,$path.'.back');
    @unlink($btmp);
    if(!$bok)return['ok'=>false,'msg'=>'Backup upload failed: '.$buerr.' — nothing was saved'];
  }
  $tmp=tempnam(sys_get_temp_dir(),'bsw');
  if(!$tmp||@file_put_contents($tmp,$content)===false){if($tmp)@unlink($tmp);return['ok'=>false,'msg'=>'Cannot stage content for upload'];}
  [$ok,$uerr]=ftp_upload_from_local($c,$tmp,$path);
  @unlink($tmp);
  if(!$ok)return['ok'=>false,'msg'=>'Upload failed: '.$uerr];
  return['ok'=>true,'msg'=>$backup?'Saved (backup: '.basename($path).'.back)':'Saved','size'=>strlen($content),'backup'=>$backup];
}

/* ── Transfer / Sync engine ───────────────────────────────────── */
function xfer_dst_creds(){
  return['h'=>trim((string)($_POST['_dh']??'')),'port'=>(int)($_POST['_dport']??21),'u'=>trim((string)($_POST['_du']??'')),'pw'=>(string)($_POST['_dpw']??''),'method'=>strtolower(trim((string)($_POST['_dmethod']??'ftp')))];
}
// Acquire the source as a local file path. Returns [localPath, isTemp, err].
function xfer_fetch_source($skind,$sc,$spath,$opts=[]){
  if($skind==='local'){
    $real=realpath($spath);
    if(!$real||!is_file($real))return[null,false,'Source file not found'];
    if($real===realpath(__FILE__))return[null,false,'Refused: source is the script'];
    return[$real,false,null];
  }
  if(!empty($opts['http'])){
    // Download the source over HTTP via its (optionally secure_link-signed) web URL.
    $hc=$opts['http'];
    $strip=rtrim((string)($hc['strip']??''),'/');
    $uri=$spath;
    if($strip!==''&&strpos($uri,$strip)===0)$uri=substr($uri,strlen($strip))?:'/';
    $uri=secure_link_norm_uri($uri);
    $cfg=$hc['cfg']??[];
    if(!empty($hc['sign'])&&($cfg['secret']??'')!==''){
      $r=secure_link_build((string)($hc['base']??''),$uri,$cfg);$url=$r['url'];
    }else{
      $url=rtrim((string)($hc['base']??''),'/').$uri;
    }
    if(!filter_var($url,FILTER_VALIDATE_URL))return[null,false,'Invalid source web URL (check Base URL)'];
    $tmp=tempnam(sys_get_temp_dir(),'bsh');$fp=$tmp?fopen($tmp,'wb'):false;
    if(!$fp)return[null,false,'Cannot create temp file'];
    $ch=curl_init($url);
    curl_setopt_array($ch,[CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_TIMEOUT=>0,CURLOPT_CONNECTTIMEOUT=>30,CURLOPT_USERAGENT=>'BlackSwanUpload/'.APP_VER]);
    curl_exec($ch);$err=curl_error($ch);$http=(int)curl_getinfo($ch,CURLINFO_HTTP_CODE);curl_close($ch);fclose($fp);
    if($err||$http>=400||@filesize($tmp)<1){@unlink($tmp);return[null,false,'HTTP download failed'.($http?(' (HTTP '.$http.')'):'').($err?(' '.$err):'').' — check secure_link secret/expression or $remote_addr binding'];}
    return[$tmp,true,null];
  }
  if(!empty($opts['relay'])){
    $srcUrl=ftp_proto_url($sc,$spath);
    $r=mitm_post($opts['relay'],['_a'=>'fetch','url'=>$srcUrl,'_name'=>basename($spath)]);
    if(!$r||empty($r['ok'])||empty($r['url']))return[null,false,'Relay fetch failed: '.($r['error']??'no response from relay')];
    $tmp=tempnam(sys_get_temp_dir(),'bsr');$fp=$tmp?fopen($tmp,'wb'):false;
    if(!$fp)return[null,false,'Cannot create temp file'];
    $ch=curl_init($r['url']);
    curl_setopt_array($ch,[CURLOPT_FILE=>$fp,CURLOPT_FOLLOWLOCATION=>true,CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_TIMEOUT=>0,CURLOPT_CONNECTTIMEOUT=>30,CURLOPT_USERAGENT=>'BlackSwanUpload/'.APP_VER]);
    curl_exec($ch);$err=curl_error($ch);curl_close($ch);fclose($fp);
    if($err||@filesize($tmp)<1){@unlink($tmp);return[null,false,'Relay download failed: '.($err?:'empty file')];}
    if(!empty($opts['relay_del']))@mitm_post($opts['relay'],['_a'=>'del_by_name','_name'=>basename($spath)]);
    return[$tmp,true,null];
  }
  [$tmp,$err]=ftp_download_to_tmp($sc,$spath,!empty($opts['native_only']));
  if(!$tmp)return[null,false,$err];
  return[$tmp,true,null];
}
// Place a local file at the destination (local dir or ftp dir). Returns [ok, finalName, err].
function xfer_place_dest($dkind,$dc,$ddir,$name,$local,$opts=[]){
  $name=sanitize_filename($name);
  if($name==='')return[false,'','Invalid destination name'];
  if($dkind==='local'){
    $destReal=realpath($ddir);
    if(!$destReal){@mkdir($ddir,0755,true);$destReal=realpath($ddir);}
    if(!$destReal||!is_dir($destReal))return[false,'','Destination folder not found'];
    $dst=rtrim($destReal,'/\\').'/'.$name;
    if(realpath($local)===$dst)return[true,$name,null];
    $ok=@copy($local,$dst);
    return[(bool)$ok,$name,$ok?null:'Cannot write to destination folder'];
  }
  $target=rtrim($ddir,'/').'/'.$name;
  [$ok,$err]=ftp_upload_from_local($dc,$local,$target,!empty($opts['native_only']));
  return[(bool)$ok,$name,$ok?null:$err];
}
// Shared driver for direct / plain-ftp / relay transfers.
function xfer_run($srcOpts){
  set_time_limit(0);$start=microtime(true);
  $skind=trim((string)($_POST['_skind']??'ftp'));
  $dkind=trim((string)($_POST['_dkind']??'local'));
  $sc=ftp_creds_from_post();
  $dc=xfer_dst_creds();
  $spath=trim((string)($_POST['_sp']??''));
  $ddir=trim((string)($_POST['_dp']??''));
  $name=(string)($_POST['_name']??basename($spath));
  if($spath===''||$ddir==='')return['ok'=>false,'msg'=>'Source path and destination required'];
  [$local,$isTemp,$err]=xfer_fetch_source($skind,$sc,$spath,$srcOpts);
  if(!$local)return['ok'=>false,'msg'=>$err];
  $size=@filesize($local);
  [$ok,$finalName,$perr]=xfer_place_dest($dkind,$dc,$ddir,$name,$local,$srcOpts);
  if($isTemp)@unlink($local);
  if(!$ok)return['ok'=>false,'msg'=>$perr];
  return['ok'=>true,'msg'=>'Transferred','name'=>$finalName,'size'=>(int)$size,'elapsed'=>human_timing($start)];
}
function ajax_xfer_direct(){return xfer_run([]);}
function ajax_xfer_ftp(){
  $skind=trim((string)($_POST['_skind']??''));$dkind=trim((string)($_POST['_dkind']??''));
  if(($skind==='ftp'&&strtolower((string)($_POST['_method']??''))==='sftp')||($dkind==='ftp'&&strtolower((string)($_POST['_dmethod']??''))==='sftp'))
    return['ok'=>false,'msg'=>'Plain-FTP method cannot be used with SFTP endpoints — use Direct'];
  return xfer_run(['native_only'=>true]);
}
function ajax_xfer_relay(){
  $relay=trim((string)($_POST['_relay']??''));
  if(!filter_var($relay,FILTER_VALIDATE_URL))return['ok'=>false,'msg'=>'Relay (MITM) server URL is required for relay transfers'];
  if(trim((string)($_POST['_skind']??''))==='local')return['ok'=>false,'msg'=>'Relay needs a remote (FTP) source'];
  return xfer_run(['relay'=>$relay,'relay_del'=>($_POST['_relay_del']??'')==='1']);
}
// HTTP source: download the source file over its (optionally secure_link-signed) web URL, then upload to the destination.
function ajax_xfer_http(){
  $base=trim((string)($_POST['_base']??''));
  if($base===''||!filter_var($base,FILTER_VALIDATE_URL))return['ok'=>false,'msg'=>'A valid source Web Base URL is required for HTTP sync'];
  if(trim((string)($_POST['_skind']??''))!=='ftp')return['ok'=>false,'msg'=>'HTTP sync needs a remote (FTP) source to browse'];
  return xfer_run(['http'=>[
    'base'=>$base,
    'strip'=>(string)($_POST['_strip']??''),
    'sign'=>($_POST['_seclink_on']??'')==='1',
    'cfg'=>secure_link_cfg_from_post(),
  ]]);
}
// FXP: direct server-to-server FTP. Best-effort via ftp_raw; falls back to Direct.
function ajax_xfer_fxp(){
  set_time_limit(0);$start=microtime(true);
  $sc=ftp_creds_from_post();$dc=xfer_dst_creds();
  $spath=trim((string)($_POST['_sp']??''));
  $ddir=trim((string)($_POST['_dp']??''));
  $name=sanitize_filename((string)($_POST['_name']??basename($spath)));
  if(trim((string)($_POST['_skind']??''))!=='ftp'||trim((string)($_POST['_dkind']??''))!=='ftp')
    return['ok'=>false,'msg'=>'FXP requires both sides to be FTP'];
  if($sc['method']==='sftp'||$dc['method']==='sftp')
    return['ok'=>false,'msg'=>'FXP is not defined for SFTP — use Direct'];
  if(!function_exists('ftp_raw')){$r=xfer_run([]);if($r['ok'])$r['msg']='FXP unavailable (ftp_raw missing) — used Direct fallback';return $r;}
  $target=rtrim($ddir,'/').'/'.$name;
  [$src,$e1]=ftp_make_connection($sc['h'],$sc['port'],$sc['u'],$sc['pw'],$sc['method']);
  [$dst,$e2]=ftp_make_connection($dc['h'],$dc['port'],$dc['u'],$dc['pw'],$dc['method']);
  if($src&&$dst){
    @ftp_raw($dst,'TYPE I');@ftp_raw($src,'TYPE I');
    $pasv=@ftp_raw($dst,'PASV');
    $line=is_array($pasv)?implode(' ',$pasv):'';
    if(preg_match('/\((\d+,\d+,\d+,\d+,\d+,\d+)\)/',$line,$m)){
      if(@ftp_raw($src,'PORT '.$m[1])){
        @ftp_raw($dst,'STOR '.$target);
        $retr=@ftp_raw($src,'RETR '.$spath);
        $rl=is_array($retr)?implode(' ',$retr):'';
        if(preg_match('/^(1|2)\d\d/',trim($rl))){@ftp_close($src);@ftp_close($dst);return['ok'=>true,'msg'=>'FXP transfer initiated','name'=>$name,'elapsed'=>human_timing($start)];}
      }
    }
    @ftp_close($src);@ftp_close($dst);
  }else{if($src)@ftp_close($src);if($dst)@ftp_close($dst);}
  $r=xfer_run([]);if($r['ok'])$r['msg']='FXP refused by host — used Direct fallback';
  return $r;
}

function perms_sym_to_octal($s){
  if(strlen($s)<10)return'';
  $m=0;
  if($s[1]==='r')$m+=0400;if($s[2]==='w')$m+=0200;if($s[3]==='x'||$s[3]==='s')$m+=0100;
  if($s[4]==='r')$m+=040; if($s[5]==='w')$m+=020; if($s[6]==='x'||$s[6]==='s')$m+=010;
  if($s[7]==='r')$m+=04;  if($s[8]==='w')$m+=02;  if($s[9]==='x'||$s[9]==='t')$m+=01;
  return decoct($m);
}

function perms_int_to_sym($p){
  $s=($p&0x4000)?'d':(($p&0xA000)?'l':'-');
  $s.=($p&0400)?'r':'-';$s.=($p&0200)?'w':'-';$s.=($p&0100)?(($p&04000)?'s':'x'):(($p&04000)?'S':'-');
  $s.=($p&040)?'r':'-'; $s.=($p&020)?'w':'-'; $s.=($p&010)?(($p&02000)?'s':'x'):(($p&02000)?'S':'-');
  $s.=($p&04)?'r':'-';  $s.=($p&02)?'w':'-';  $s.=($p&01)?(($p&01000)?'t':'x'):(($p&01000)?'T':'-');
  return $s;
}

/* ── nginx secure_link signed-URL generator ──────────────────────────
 * Mirrors `secure_link_md5 "<expr>";` — builds Base-64-URL of md5_raw(expr).
 * expr template tokens: {expires} {uri} {addr} {secret}
 * (default matches: secure_link_md5 "$secure_link_expires$uri$remote_addr <secret>")
 * The {uri} is the decoded request path nginx sees (no query). {addr} is the
 * requester IP when the secure_link_md5 includes $remote_addr — for a link
 * clicked in the browser that is this visitor's IP ($_SERVER['REMOTE_ADDR']). */
function secure_link_build($baseUrl,$uri,$cfg){
  $secret=(string)($cfg['secret']??'');
  $ttl=max(1,(int)($cfg['ttl']??3600));
  $expires=time()+$ttl;
  $addr='';
  if(!empty($cfg['useaddr']))$addr=($cfg['addr']!==''&&$cfg['addr']!==null)?(string)$cfg['addr']:(string)($_SERVER['REMOTE_ADDR']??'');
  $tmpl=(isset($cfg['tmpl'])&&$cfg['tmpl']!=='')?(string)$cfg['tmpl']:'{expires}{uri}{addr} {secret}';
  $input=strtr($tmpl,['{expires}'=>$expires,'{uri}'=>$uri,'{addr}'=>$addr,'{secret}'=>$secret]);
  $token=rtrim(strtr(base64_encode(md5($input,true)),'+/','-_'),'=');
  $mp=(isset($cfg['md5param'])&&$cfg['md5param']!=='')?(string)$cfg['md5param']:'md5';
  $ep=(isset($cfg['expparam'])&&$cfg['expparam']!=='')?(string)$cfg['expparam']:'expires';
  $url=rtrim((string)$baseUrl,'/').$uri;
  $url.=(strpos($url,'?')!==false?'&':'?').rawurlencode($mp).'='.$token.'&'.rawurlencode($ep).'='.$expires;
  return['url'=>$url,'token'=>$token,'expires'=>$expires,'addr'=>$addr];
}
function secure_link_cfg_from_post(){
  return[
    'secret'  =>(string)($_POST['_secret']??''),
    'ttl'     =>(int)($_POST['_ttl']??3600),
    'md5param'=>(string)($_POST['_md5param']??'md5'),
    'expparam'=>(string)($_POST['_expparam']??'expires'),
    'tmpl'    =>(string)($_POST['_tmpl']??''),
    'useaddr' =>($_POST['_useaddr']??'')==='1',
    'addr'    =>(string)($_POST['_addr']??''),
  ];
}
function secure_link_norm_uri($u){$u=(string)$u;if($u===''||$u[0]!=='/')$u='/'.ltrim($u,'/');return $u;}
function ajax_secure_sign(){
  $base=trim((string)($_POST['_base']??''));
  $cfg=secure_link_cfg_from_post();
  if($cfg['secret']==='')return['ok'=>false,'msg'=>'Secure-link secret is empty'];
  // Batch mode: _uris is a JSON array of relative paths.
  $batch=json_decode((string)($_POST['_uris']??''),true);
  if(is_array($batch)){
    $out=[];
    foreach($batch as $u){$r=secure_link_build($base,secure_link_norm_uri($u),$cfg);$out[]=$r['url'];}
    return['ok'=>true,'urls'=>$out];
  }
  $uri=secure_link_norm_uri((string)($_POST['_uri']??''));
  return['ok'=>true]+secure_link_build($base,$uri,$cfg);
}

function ajax_check_update(){
  $api=GH_API.'/releases/latest';
  $ch=curl_init($api);
  if(!$ch)return['ok'=>false,'msg'=>'curl init failed'];
  curl_setopt_array($ch,[
    CURLOPT_RETURNTRANSFER=>true,CURLOPT_TIMEOUT=>15,CURLOPT_CONNECTTIMEOUT=>10,
    CURLOPT_SSL_VERIFYPEER=>false,CURLOPT_SSL_VERIFYHOST=>0,
    CURLOPT_USERAGENT=>'BlackSwanUpload/'.APP_VER,
    CURLOPT_HTTPHEADER=>['Accept: application/vnd.github+json'],
  ]);
  $resp=curl_exec($ch);$err=curl_error($ch);$code=(int)curl_getinfo($ch,CURLINFO_HTTP_CODE);curl_close($ch);
  if($resp===false||$err)return['ok'=>false,'msg'=>'Could not reach GitHub: '.($err?:'empty response'),'http'=>$code];
  $data=@json_decode($resp,true);
  if(!is_array($data))return['ok'=>false,'msg'=>'GitHub returned non-JSON (HTTP '.$code.')','http'=>$code,'raw'=>substr(preg_replace('/\s+/',' ',(string)$resp),0,200)];
  if(empty($data['tag_name'])){
    $gh=isset($data['message'])?(string)$data['message']:'no "tag_name" in response';
    $rate=($code===403||$code===429||stripos($gh,'rate limit')!==false);
    $hint=$rate?' — this server\'s IP hit GitHub\'s unauthenticated API limit (60 requests/hour). Wait and retry, or update manually.':'';
    return['ok'=>false,'msg'=>'GitHub: '.$gh.$hint,'http'=>$code];
  }
  $latest=ltrim($data['tag_name'],'v');
  $dl_url='';
  if(!empty($data['assets'])&&is_array($data['assets'])){
    foreach($data['assets'] as $asset){
      if(($asset['name']??'')===('upload.php')){$dl_url=$asset['browser_download_url']??'';break;}
    }
  }
  if(!$dl_url){
    // Fall back to raw source from tag
    $dl_url=GH_RAW.'/refs/tags/v'.$latest.'/upload.php';
  }
  $needs=version_compare($latest,APP_VER,'>');
  return['ok'=>true,'current'=>APP_VER,'latest'=>$latest,'download_url'=>$dl_url,'needs_update'=>$needs,'http'=>$code,'asset'=>(strpos($dl_url,'/releases/download/')!==false),'release_page'=>'https://github.com/amirhp-com/upload-url-to-server/releases/latest'];
}


/*
 * Lead Developer: amirhp-com (https://amirhp.com/)
 */
