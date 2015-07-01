<?php
require_once 'core/init.php';
$user = new User();
if(!$user->isLoggedIn()) {
    Redirect::to('index.php');
} else {
    if (!isset($_GET['id'])) {
        Redirect::to('projectlist.php');
    } else {
        $id = $_GET['id'];
        $projects = DB::getInstance()->get('projects', array('id', '=', $id));
    
        if(!$projects->count()) {
            echo 'no project with the id of ', $id;
        } else {
            foreach($projects->results() as $project) {
                $textfile = file_get_contents($project->data);
                
                if(Input::exists()) {
                    if(Token::check(Input::get('token'))) {
                        //combine inputs first
                        $x = Input::get('x');
                        $y = 0;
                        $data = '';
                        $olddata = '';

                        if(count($x)) {
                            while($x >= $y) {
                                $data .= Input::get($y);
                                $datacount = strlen($data);
                                $olddatacount = strlen($olddata);
                                if($y < $x - 1) {
                                    if(!$datacount = $olddatacount) {
                                        $data .= "%n";
                                    }
                                }
                                $y++;
                                $olddata = $data;
                            }
                            $fp = fopen($project->data,"w");
                            fwrite($fp,$data);
                            fclose($fp);
                            Session::flash('projectlist', $data);
                            Redirect::to('projectlist.php');
                        }

                    }
                }
                
                
                
                //keep below http headers && before echo output
                include_once 'header.php';
                
                ?>
                <form action="" method="post">
                    <div class="field">
                        <label for="title">Title
                            <input type="text" name="title" id="title" value="<?php echo $project->title; ?>">
                        </label>
                    </div>
                    <div class="field">
                        <p>Cover Image</p>
                        <img src="<?php echo $project->cover; ?>" class="edit">
                    </div>
                    <?php
                    $texts = explode('%n', $textfile);
                    $x = 0;
                    foreach($texts as $text) {
                        if (strpos($text,'images/') !== false) {
                        ?>
                            <div class="field">
                                <p id="delete<?php echo $x; ?>"><a>X</a></p>
                                <script>
                                       $("#delete<?php echo $x; ?>").click(function() {
                                            $('#delete<?php echo $x; ?>').css("display", "none");
                                            $('#img<?php echo $x; ?>').css("display", "none");
                                            $('#<?php echo $x; ?>').css("display", "none");
                                            $('#<?php echo $x; ?>').val("");
                                        });
                                </script>
                                <img src="<?php echo $text; ?>" id="img<?php echo $x; ?>" class="edit">
                                <input type="hidden" name="<?php echo $x; ?>" id="<?php echo $x; ?>" value="<?php echo $text; ?>">
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="field">
                                <p id="delete<?php echo $x; ?>"><a>X</a></p>
                                <script>
                                       $("#delete<?php echo $x; ?>").click(function() {
                                            $('#delete<?php echo $x; ?>').css("display", "none");
                                            $('#<?php echo $x; ?>').css("display", "none");
                                            $('#<?php echo $x; ?>').val("");
                                        });
                                </script>
                                <textarea name="<?php echo $x; ?>" id="<?php echo $x; ?>"><?php echo $text; ?></textarea>
                            </div>
                        <?php
                        }
                        $x++;
                    }
                    ?>
                    <div class="field">
                        <button id="addText">Add Text</button> <button id="addPhoto">Add Photo</button>
                    </div>
                    <input type="hidden" name="x" value="<?php echo $x; ?>">
                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                    <input type="submit" value="Save Changes">
                </form>
                <?php
            }
            ?>
            <?php
        }
    }
}
include_once 'footer.php';