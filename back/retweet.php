<?php
    session_start(); 
    $pdo = require_once("database.php");
    $user_id = $_SESSION['user_id'];
    $retweet_id = $_GET['retweet_id'];
    if($user_id && $retweet_id){
        $statement_all_retweet = $pdo->query("SELECT id_user, id_tweet FROM retweet WHERE id_tweet = $retweet_id;");
        $resultat_all_retweet = $statement_all_retweet->fetchAll(PDO::FETCH_ASSOC);
        if(empty($resultat_all_retweet)){
            $statement_tweet_content = $pdo->query("SELECT id_user, content FROM tweet WHERE id = $retweet_id;");
            $resultat_tweet = $statement_tweet_content->fetchAll(PDO::FETCH_ASSOC);
            foreach ($resultat_tweet as $tweet){
                if($tweet["id_user"] === $user_id){
                    echo "Tweeter par la personne\n";
                }else{
                    $statement_retweet = $pdo->query("INSERT INTO retweet(id_user, id_tweet) VALUES($user_id, $retweet_id);");
                    $statement_tweet_content = $pdo->query("SELECT id_user, content FROM tweet WHERE id = $retweet_id;");
                    $resultat_tweet = $statement_tweet_content->fetchAll(PDO::FETCH_ASSOC);
                    $content = $resultat_tweet[0]["content"]."Retweet";
                    $statement_tweet = $pdo->query("INSERT INTO tweet(id_user, content) VALUES ($user_id,'$content');");
                    header("Location: ../front/homepage.php");
                }    
            }
        }else{
            foreach ($resultat_all_retweet as $all_retweet) {
                if($all_retweet["id_user"] === $user_id){
                    echo "deja retwitter\n";
                    return;
                }else{
                    $statement_retweet = $pdo->query("INSERT INTO retweet(id_user, id_tweet) VALUES($user_id, $retweet_id);");
                    $statement_tweet_content = $pdo->query("SELECT id_user, content FROM tweet WHERE id = $retweet_id;");
                    $resultat_tweet = $statement_tweet_content->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($resultat_tweet as $tweet){
                        if($tweet["id_user"] === $user_id){
                            echo "error deja tweeter par la personne\n";
                        }else{
                            $content = $resultat_tweet[0]["content"]."Retweet";
                            $statement_tweet = $pdo->query("INSERT INTO tweet(id_user, content) VALUES ($user_id,'$content');");
                            header("Location: ../front/homepage.php");
                        }    
                    }
                }
            }
        }
    }