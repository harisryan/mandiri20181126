<?php
function getFileDetail($file) {
  $file_info = pathinfo($file);
  $file_extension = !empty($file_info) ? $file_info['extension'] : '';

  $ch = curl_init($file);
  curl_setopt($ch, CURLOPT_NOBODY, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

  $data = curl_exec($ch);
  curl_close($ch);

  $contentLength = '';

  if (preg_match('/Content-Length: (\d+)/', $data, $matches)) {
    $size = formatSizeFile($matches[1]);

    // Contains file size in bytes
    $contentLength = $size;

  }

  return '(' . strtoupper($file_extension) . ',' . $contentLength . ')';
}

function formatSizeFile($bytes) {
  if ($bytes >= 1073741824) {
      $bytes = number_format($bytes / 1073741824, 2) . ' GB';
  } else if ($bytes >= 1048576) {
      $bytes = number_format($bytes / 1048576, 2) . ' MB';
  } elseif ($bytes >= 1024) {
      $bytes = number_format($bytes / 1024, 2) . ' KB';
  } elseif ($bytes > 1) {
      $bytes = $bytes . ' bytes';
  } elseif ($bytes == 1) {
      $bytes = $bytes . ' byte';
  } else {
      $bytes = '0 bytes';
  }

  return $bytes;
}