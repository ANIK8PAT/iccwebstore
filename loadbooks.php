<?php
                                    include('con.php');

                                    $sqlget = "SELECT * FROM iccbookstore";
                                    $sqldata = mysqli_query($db, $sqlget) or die('An error occured...');
                                    while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                                    ?>
                                    <div class="book-card">
                                        <div class="book">
                                            <div class="book-image">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['cover']); ?>"/></div>
                                            <div class="book-detail">
                                                <span class="book-name">
                                                    <?php echo $row['name']; ?>
                                                </span>
                                                <div class="book-card-author">
                                                    <?php echo $row['author']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="book-card-buttons">
                                            <button class="content-button details-button">Details</button>
                                            <div class="menu">
                                                <button class="dropdown">
                                                    <ul>
                                                    <li><a href="#">Buy Now</a></li>
                                                    <li><a href="#">Add to Cart</a></li>
                                                    <li><a href="#">Add to Wishlist</a></li>
                                                    </ul>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>