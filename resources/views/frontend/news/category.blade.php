@extends("frontend.layout.template")

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="breadcrumbs column">
        <p>
            <a href="{{ route('home') }}">Home.</a> \\
            {{ $newsCategory->title }}
        </p>
    </div>
    <div class="main-content">
                    <div class="column-two-third single">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src={{ asset('img/flexslider/1.png') }} alt="MyPassion" />
                                </li>
                                <li>
                                    <img src={{ asset('img/flexslider/3.png') }} alt="MyPassion" />
                                </li>
                                <li>
                                    <img src={{ asset('img/flexslider/5.png') }} alt="MyPassion" />
                                </li>
                            </ul>
                        </div>
                        
                        <h6 class="title">Blandit Rutrum, Erat et Sagittis. Lorem Ipsum Dolor, Sit Amet Adipsing.</h6>
                        <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales dapibus dui, sed iaculis metus facilisis sed. Etiam scelerisque molestie purus vel mollis. Mauris dapibus quam id turpis dignissim rutrum. Phasellus placerat nunc in nulla pretium pellentesque. Aliquam erat volutpat. In nec enim dui, in hendrerit enim. Vestibulum ante 
                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus at tortor at est mattis aliquam non 
                        id est. Quisque pretium suscipit faucibus. Fusce vestibulum mollis interdum. Duis a nibh at odio aliquet varius. Pellen tesque feugiat nulla nec ipsum suscipit ut varius elit posuere. Nunc tellus urna, viverra ac porta ac, com modo et libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Pellentesque ullam corper nisl id justo ultrices hendrerit. Vivamus dignissim ultrices erat, vitae placerat ligula lacinia non. In arcu nunc, aliquet a condimentum et, tempor eget nisl. </p>
                        <ul class="sharebox">
                            <li><a href="#"><span class="twitter">Tweet</span></a></li>
                            <li><a href="#"><span class="pinterest">Pin it</span></a></li>
                            <li><a href="#"><span class="facebook">Like</span></a></li>
                        </ul>
                        
                        
                        <div class="authorbox">
                            <img src="img/trash/author.png" alt="MyPassion" />
                            <h6>MyPassion.</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales dapibus dui, sed iaculis metus facilisis sed. Etiam scelerisque molestie purus vel mollis. Mauris dapibu quam id turpis dignissim rutrum.</p>
                        </div>
                        
                        <div class="relatednews">
                            <h5 class="line"><span>Related News.</span></h5>
                            <ul>
                                <li>
                                    <a href="#"><img src="img/trash/5.png" alt="MyPassion" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/6.png" alt="MyPassion" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/7.png" alt="MyPassion" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/8.png" alt="MyPassion" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="comments">
                            <h5 class="line"><span>Comments.</span></h5>
                            <ul>
                                <li>
                                    <div>
                                        <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                        <div class="commment-text-wrap">
                                            <div class="comment-data">
                                                <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                            </div>
                                            <div class="comment-text">Curabitur nunc mauris, <a href="#">link test</a> id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                        </div>
                                        
                                    </div>
                                    <ul class="children">
                                        <li>
                                            <div>
                                                <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                                <div class="commment-text-wrap">
                                                    <div class="comment-data">
                                                        <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                    </div>
                                                    <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                </div>
                                            </div>
                                            
                                            <ul class="children">
                                                <li>
                                                    <div>
                                                        <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                                        <div class="commment-text-wrap">
                                                            <div class="comment-data">
                                                                <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                            </div>
                                                            <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <ul class="children">
                                                        <li>
                                                            <div>
                                                                <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                                                <div class="commment-text-wrap">
                                                                    <div class="comment-data">
                                                                        <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                                    </div>
                                                                    <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                                </div>
                                                            </div>
                                                            
                                                            <ul class="children">
                                                                <li>
                                                                    <div>
                                                                        <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                                                        <div class="commment-text-wrap">
                                                                            <div class="comment-data">
                                                                                <p>MyPassion <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                                            </div>
                                                                            <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <ul class="children">
                                                                        <li>
                                                                            <div>
                                                                                <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                                                                <div class="commment-text-wrap">
                                                                                    <div class="comment-data">
                                                                                        <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                                                    </div>
                                                                                    <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    
                                                                </li>
                                                            </ul>
                                                            
                                                        </li>
                                                    </ul>
                                                    
                                                </li>
                                            </ul>
                                            
                                            <ul class="children">
                                                <li>
                                                    <div>
                                                        <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                                        <div class="commment-text-wrap">
                                                            <div class="comment-data">
                                                                <p><a href="#" class="url">MyPassion </a><br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                            </div>
                                                            <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                        </li>
                                    </ul>
                                    <ul class="children">
                                        <li>
                                            <div>
                                                <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                                <div class="commment-text-wrap">
                                                    <div class="comment-data">
                                                        <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                    </div>
                                                    <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="comment-form">
                            <h5 class="line"><span>Leave a reply.</span></h5>
                            <form action="" method="post">
                                <div class="form">
                                    <label>Name*</label>
                                    <div class="input">
                                        <input type="text" class="name" />
                                    </div>
                                </div>
                                <div class="form">
                                    <label>Email*</label>
                                    <div class="input">
                                        <input type="text" class="name" />
                                    </div>
                                </div>
                                <div class="form">
                                    <label>Website</label>
                                    <div class="input">
                                        <input type="text" class="name" />
                                    </div>
                                </div>
                                <div class="form">
                                    <label>Comment*</label>
                                    <textarea rows="10" cols="20"></textarea>
                                </div>
                                <input type="submit" class="post-comment" value="Post Comment" />
                            </form>
                        </div>
                        
                    </div>
                    <!-- /Single -->
                    
                </div>
@endsection