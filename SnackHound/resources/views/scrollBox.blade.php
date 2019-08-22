

<link rel="stylesheet" href="{{URL::asset('/css/scrollbox.css')}}" />
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400&display=swap" rel="stylesheet">



<section class="mainReview">
    
    <div class="reviewBox">
        
        <div class="scrollBoxReview">
            
            <h1>REVIEWS:</h1>
            <div class="reviewList">
                
                <div class="formReview">
                    
                    <div class="userInfo">
                        <p class="userNameInBox">User Name</p><p>Rating</p><p class="dateReview">(Date):</p>
                    </div>
                    
                    <div class="userReview">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Aliquid tempora magni placeat labore pariatur, laboriosam optio molestiae 
                        voluptatibus accusamus cupiditate impedit corrupti consequatur repellendus ea ipsam
                    </div>
                </div>

                <div class="formReview">
                    
                        <div class="userInfo">
                            <p class="userNameInBox">User Name</p><p>Rating</p><p class="dateReview">(Date):</p>
                        </div>
                        
                        <div class="userReview">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Aliquid tempora magni placeat labore pariatur, laboriosam optio molestiae 
                            voluptatibus accusamus cupiditate impedit corrupti consequatur repellendus ea ipsam
                        </div>
                    </div>

                    <div class="formReview">
                    
                            <div class="userInfo">
                                <p class="userNameInBox">User Name</p><p>Rating</p><p class="dateReview">(Date):</p>
                            </div>
                            
                            <div class="userReview">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Aliquid tempora magni placeat labore pariatur, laboriosam optio molestiae 
                                voluptatibus accusamus cupiditate impedit corrupti consequatur repellendus ea ipsam
                            </div>
                        </div>


            </div>
        </div>

        <hr class="separator">

        <div class="leavReview">
            <h1>Leave A Review</h1>
            <form action="" method="POST">
                <div>
                    <h3>Comments:</h3>
                    <div class="ratingReview">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <br>
                        <img class="starlogo" src="{{URL::asset('assets/ICONS/Food Truck Cards/icons8-star-blank.svg')}}" alt="">
                        <br>
                        <input type="submit" value="Post">
                    </div>
                </div>
            </form>


        </div>
        
    </div>
</section>