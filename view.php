<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>EDULEARN ELITE - Admin</title>
<style>body{background:#0f172a;color:#fff;font-family:sans-serif;padding:20px}h1{color:#facc15}.box{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);padding:15px;border-radius:14px;margin-top:10px;white-space:pre-line;font-size:14px}a{color:#facc15}</style>
<meta http-equiv="refresh" content="2"></head><body>
<h1>EDULEARN ELITE - Members</h1><p>Live Auto Refresh Every 2 Sec | Delhi Time (Asia/Kolkata) | <a href="data.txt" target="_blank">Download data.txt</a></p><hr>
<?php
if(file_exists("data.txt")){ echo "<div class='box'>".nl2br(file_get_contents("data.txt"))."</div>"; } else { echo "No data yet. File will be created after first registration."; }
?>
</body></html>