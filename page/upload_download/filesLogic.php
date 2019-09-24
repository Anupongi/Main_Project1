<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
$conn = mysqli_connect('localhost', 'root', 'KZTuR1v3aaVA7t', 'file-management');
$sql = "SELECT * FROM `files`";
mysqli_set_charset($conn,"utf8");
$result = mysqli_query($conn, $sql);
$d = mysqli_fetch_array($result);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    mysqli_set_charset($conn,"utf8");
    $sql1 = "SELECT  `name`  FROM `files` WHERE `id` = '$id' ";
    $result1 = mysqli_query($conn, $sql1);
    $download = mysqli_fetch_array($result1);
    $download1 = $download[0];
    // echo $result1;
    $file = $download1 ; // Decode URL-encoded string
    $filepath = "./uploads/file/" . $file;
    echo $filepath;
    // if(file_exists($filepath)) {
    //     header('Content-Description: File Transfer');
    //     header('Content-Type: application/octet-stream');
    //     header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
    //     header('Expires: 0');
    //     header('Cache-Control: must-revalidate');
    //     header('Pragma: public');
    //     header('Content-Length: ' . filesize($filepath));
    //     flush(); // Flush system output buffer
    //     readfile($filepath);
    //     exit;
    // }
    // $file = mysqli_fetch_array($result1);
    // $download = $file[0];
    // $file_path = './uploads/file/'.$download;
    // $filename = realpath($filepath);
    // header("Content-Type: application/octet-stream");
    // header("Content-Transfer-Encoding: Binary");
    // header('Content-Disposition: attachment; filename=' . basename($filename));
    // echo readfile($file_path);
}    
    // $file = mysqli_fetch_array($result1);
    // $download = $file[0];
    // $filepath = './uploads/file/'. $download;
    // $filename = realpath($filepath);
    //        $file_extension = strtolower(substr(strrchr($filename,"."),1));
    //        switch ($file_extension) {
    //            case "pdf": $ctype="application/pdf"; break;
    //            case "exe": $ctype="application/octet-stream"; break;
    //            case "zip": $ctype="application/zip"; break;
    //            case "doc": $ctype="application/msword"; break;
    //            case "xls": $ctype="application/vnd.ms-excel"; break;
    //            case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
    //            default: $ctype="application/force-download";
    //        }
    //        if (!file_exists($filename)) {
    //            die("NO FILE HERE");
    //        }
    //        header("Pragma: public");
    //        header("Expires: 0");
    //        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    //        header("Cache-Control: private",false);
    //        header("Content-Type: $ctype");
    //        header("Content-Disposition: attachment; filename="".basename($filename)."";");
    //        header("Content-Transfer-Encoding: binary");
    //     //    header("Content-Length: ".@filesize($filename));
    //        set_time_limit(0);
    //     //    @readfile("$filename") or die("File not found.");
    //         header('Content-Length: ' . filesize('./uploads/file/' . $filename));
    //         // header('Content-Length: ' . @filesize($filename));
    //         readfile('./uploads/file/'. $filename);
    // if (file_exists($filepath)) {
        
        // header('Content-Description: File Transfer');
        // header('Content-Type: application/octet-stream');
        // header('Content-Disposition: attachment; filename=' . basename($filepath));
        // header('Expires: 0');
        // header('Cache-Control: must-revalidate');
        // header('Pragma: public');
        // header('Content-Length: ' . filesize('./uploads/file/' . $_FILES['myfile']));
        // readfile('./uploads/file/'. $_FILES['myfile']);

        // Now update downloads count
        // $newCount = $file['downloads'] + 1;
        
        // $updateQuery = "UPDATE `files` SET downloads=$newCount WHERE id=$id";
        // mysqli_query($conn, $updateQuery);
        // exit;
    //}


