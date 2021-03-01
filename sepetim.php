<?php
                    $basket = json_decode($_COOKIE["basket"], true);
                    if(count($basket)==0)
                    {
                        echo "Sepetiniz Boş";
                    }
                    else
                    {
                        foreach ($basket as $key => $value) {

                            echo $value["item"];
                        }
                    }
                          ?>
