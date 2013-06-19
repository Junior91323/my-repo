<?php
// This file is generated by Composer
require 'blocks/auth.php';
require 'index_project.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <?php include_once 'blocks/jquery_connect.php';?>
        <title>MobiDev </title>
        <link rel="stylesheet" type="text/css" href="style/style.css">

    </head>
    <body>

        <div id="main">

            <div id="search">
                <div style='float: left;'><h3> GitHub Browser >> Main</h3></div>
                <div id="search_form">
                    <?php require_once 'blocks/form.php'; ?>
                </div>
            </div>

            <div id="content">
                <div id="repo_info">
                    <div align="center" id="rep">
                        <h2> <?php echo $repo['full_name']; ?></h2>
                        <table id='index_table'>
                            <tr>
                                <td>  Description :</td><td><?php echo $repo['description']; ?></td>
                            </tr>
                            <tr>
                                <td>
                                    Watchers :
                                </td>
                                <td>
                                    <?php echo $repo['watchers']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Forks :
                                </td>
                                <td>
                                    <?php echo $repo['forks']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Open Issues :  
                                </td>
                                <td>
                                    <?php echo $repo['open_issues']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Homepage :
                                </td>
                                <td>
                                    <a id="href" href=" <?php echo $repo['homepage']; ?>"><?php echo $repo['homepage']; ?></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    GitHub repo :
                                </td>
                                <td>
                                    <a href="https://github.com/yiisoft/yii">https://github.com/yiisoft/yii</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Created at :
                                </td>
                                <td>
                                    <?php echo $repo['created_at']; ?>
                                </td>
                            </tr>
                        </table>       
                    </div>
                </div>
                <div id="contributors">
                    <div align="center" id="rep">
                        <h2>Contributors : </h2>
                        <table id='index_table' >
                            <?php
                            for ($i = 0; $i < 7; $i++) {

                                echo "<tr>
                                <td width='35%'><a href='user_info.php?user=" . $contributors[$i]['login'] . "'>" . $contributors[$i]['login'] . "</a>
                                </td>
                                
                                <td width='20%' align='center'>
                                   <span ><a id='like' class='like-Unlike' href=' '>Like</a></span>
                                </td>
                            </tr>";
                            }
                            ?>
                        </table>      

                    </div>


                </div>


            </div>


        </div>


    </body>
</html>