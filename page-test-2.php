<?php get_header();

//require 'google-api-php-client-1-master/src/Google/autoload.php';
require 'google-api-php-client-2.0.0-RC4/vendor/autoload.php';

DEFINE('BOOKS_FOLDER_ID', '0B7EnJtlOGUiDfjUxY1F1Q3BrTVJtODBlYVZZLTlSVEdtcXB6UjFLWlZ1V1dlWGxOYzdXWW8');

$path_url = isset($_GET['path']) ? $_GET['path'] : BOOKS_FOLDER_ID;
$path = explode('/', $path_url);
$opened = end($path);
reset($path);

// Init
$client = new Google_Client();
$client->setApplicationName("DriveApp");
$client->setScopes(implode(' ', array(Google_Service_Drive::DRIVE_READONLY)));
$client->setUseBatch(true);
$drive = new Google_Service_Drive($client);

/*$credentials = new Google_Auth_AssertionCredentials(
    'firts-acc@astral-petal-661.iam.gserviceaccount.com',
    array(Google_Service_Drive::DRIVE_READONLY),
    file_get_contents('sa.p12')
);
$client->setAssertionCredentials($credentials);*/

$client->setAuthConfig('service-account.json');

if ($client->isAccessTokenExpired()) {
    $client->refreshTokenWithAssertion();
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="post-single">
                <script>
                    $(document).ready(function ($) {
                        $(".clickable-row").click(function () {
                            window.document.location = $(this).data("href");
                        });
                    });
                </script>
                <div class="panel panel-default file-manager">
                    <div class="panel-heading">
                        <ol class="breadcrumb">
                            <?php
                            $batch = new Google_Http_Batch($client);

                            foreach ($path as $folderId) {
                                /** @var \GuzzleHttp\Psr7\Request $request */
                                $request = $drive->files->get($folderId, array('fields' => 'title, id'));
                                $batch->add($request);
                            }

                            $results = $batch->execute();
                            $i = 1;
                            /** @var \Google_Service_Drive_DriveFile $folder */
                            foreach ($results as $folder) {
                                if ($opened == $folder->getId()) {
                                    echo '<li class="active">' . $folder->getTitle() . '</li>';
                                } else {
                                    echo '<li><a href="?path=' . implode('/', array_slice($path, 0, $i)) . '">' . $folder->getTitle() . '</a></li>';
                                }
                                ++$i;
                            }
                            ?>
                        </ol>
                    </div>
                    <table class="table table-hover table-bordered">
                        <tbody>
                        <?php
                        $batch = new Google_Http_Batch($client);

                        $request = $drive->children->listChildren($opened, array('orderBy' => 'folder, title'));
                        $batch->add($request, 'dir');
                        /** @var Google_Service_Drive_ChildList $files */
                        $files = $batch->execute()['response-dir'];
                        $batch = new Google_Http_Batch($client);
                        /** @var \Google_Service_Drive_ChildReference $file */
                        foreach ($files as $file) {
                            $request = $drive->files->get($file->getId(), array('fields' => 'title, id, mimeType, iconLink, webContentLink'));
                            $batch->add($request);
                        }
                        $results = $batch->execute();

                        /** @var \Google_Service_Drive_DriveFile $file */
                        foreach ($results as $file) {
                            if ($file->getMimeType() == 'application/vnd.google-apps.folder') {
                                echo '<tr class="clickable-row" data-href="?path=' . $path_url . '/' . $file->getId() . '"><td><img src="' . $file->getIconLink() . '">' . $file->getTitle() . '</td></tr>';
                            } else {
                                echo '<tr class="clickable-row" data-href="' . $file->getWebContentLink() . '"><td><img src="' . $file->getIconLink() . '">' . $file->getTitle() . '</td></tr>';
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
