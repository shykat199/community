@extends('community-frontend.layout.frontend_auth')

@section('frontend.content')
    <div class="col-lg-6">

        <div class="main-content create-post">
            <div class="widget-title">
                <h5>Create New Post</h5>
            </div>
            <form action="#" class="input-psot">
                <textarea name="postMessage" id="postMessage" placeholder="Write something here..."></textarea>
            </form>

            <ul class="attachment-btn">
                <li>
                    <button type="button" class="attachment-option-btn">
                        <div class="attachment-icon photo-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0"
                                 viewBox="0 0 430.23 430.23" style="enable-background:new 0 0 512 512"
                                 xml:space="preserve" class=""><g>
                                    <path
                                        d="M217.875 159.668c-24.237 0-43.886 19.648-43.886 43.886 0 24.237 19.648 43.886 43.886 43.886 24.237 0 43.886-19.648 43.886-43.886 0-24.238-19.648-43.886-43.886-43.886zm0 66.873c-12.696 0-22.988-10.292-22.988-22.988s10.292-22.988 22.988-22.988 22.988 10.292 22.988 22.988-10.292 22.988-22.988 22.988z"
                                        fill="#000000" data-original="#000000" class=""></path>
                                    <path
                                        d="M392.896 59.357 107.639 26.966a39.18 39.18 0 0 0-30.824 8.882 39.705 39.705 0 0 0-15.151 27.167l-5.224 42.841H40.243c-22.988 0-40.229 20.375-40.229 43.363V362.9c-.579 21.921 16.722 40.162 38.644 40.741.528.014 1.057.017 1.585.01h286.824c22.988 0 43.886-17.763 43.886-40.751v-8.359a52.242 52.242 0 0 0 19.853-8.359 43.366 43.366 0 0 0 15.151-28.212l24.033-212.114c2.45-23.041-14.085-43.768-37.094-46.499zM350.055 362.9c0 11.494-11.494 19.853-22.988 19.853H40.243c-10.383.305-19.047-7.865-19.352-18.248a18.68 18.68 0 0 1 .021-1.605v-38.661l80.98-59.559c9.728-7.469 23.43-6.805 32.392 1.567l56.947 50.155a49.114 49.114 0 0 0 30.825 11.494 47.542 47.542 0 0 0 25.078-6.792l102.922-59.559V362.9zm0-125.91-113.894 66.351a26.645 26.645 0 0 1-30.825-2.612l-57.469-50.678c-16.471-14.153-40.545-15.021-57.992-2.09l-68.963 50.155V149.219c0-11.494 7.837-22.465 19.331-22.465h286.824c12.28.509 22.197 10.201 22.988 22.465v87.771zm59.057-133.955c-.007.069-.013.139-.021.208l-24.555 212.114a17.762 17.762 0 0 1-6.792 14.106c-2.09 2.09-6.792 3.135-6.792 4.18V149.219c-.825-23.801-20.077-42.824-43.886-43.363H77.337l4.702-40.751a24.034 24.034 0 0 1 7.837-13.584 24.032 24.032 0 0 1 15.674-4.18l284.735 32.914c11.488 1.091 19.918 11.29 18.827 22.78z"
                                        fill="#000000" data-original="#000000" class=""></path>
                                </g></svg>
                        </div>
                        Photo
                    </button>
                </li>
                <li>
                    <button type="button" class="attachment-option-btn">
                        <div class="attachment-icon vido-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                 xml:space="preserve" class=""><g>
                                    <g fill-rule="evenodd">
                                        <path
                                            d="M440.59 206.676H99.418l327.7-94.93a10.018 10.018 0 0 0 5.976-4.781 9.989 9.989 0 0 0 .847-7.606L416.793 40.16C409.941 16.516 387.926 0 363.253 0c-5.198 0-10.378.738-15.401 2.191L40.176 91.321c-14.23 4.12-26.024 13.581-33.215 26.632-7.188 13.05-8.875 28.078-4.754 42.305l16.754 57.836v238.254C18.96 487.035 43.926 512 74.609 512h120.164c5.524 0 10-4.477 10-10s-4.476-10-10-10H74.613c-19.66 0-35.652-15.992-35.652-35.652V320.262H430.589v136.086c0 19.66-15.991 35.652-35.651 35.652H274.773c-5.52 0-10 4.477-10 10s4.48 10 10 10h120.165c30.687 0 55.652-24.965 55.652-55.652V216.676c0-5.524-4.477-10-10-10zm-176.332 93.586 42.488-73.586h55.262l-42.485 73.586zm-78.36 0 42.489-73.586h55.261l-42.484 73.586zm-78.355 0 42.484-73.586h55.266l-42.488 73.586zm37.18-129.457-71.149-68.336 53.309-15.442a9.92 9.92 0 0 0 1.312 1.543l71.149 68.336-53.309 15.442a9.951 9.951 0 0 0-1.312-1.543zm134-125.84L349.87 113.3l-53.308 15.441a9.742 9.742 0 0 0-1.313-1.543l-71.148-68.336 53.308-15.441a9.92 9.92 0 0 0 1.313 1.543zM203.457 66.77l71.148 68.332-53.308 15.445a9.742 9.742 0 0 0-1.313-1.543l-71.148-68.336 53.309-15.441c.378.543.816 1.062 1.312 1.543zm149.961-45.368c3.21-.93 6.52-1.402 9.836-1.402 15.824 0 29.937 10.578 34.328 25.727l14.367 49.59-40.12 11.62a10.165 10.165 0 0 0-1.317-1.542l-71.145-68.333zM24.48 127.602c4.61-8.372 12.16-14.434 21.262-17.07l5.875-1.704a10.17 10.17 0 0 0 1.313 1.543l71.148 68.336-88.293 25.578-14.367-49.59c-2.637-9.097-1.547-18.718 3.062-27.093zm14.48 99.074h87.974l-42.485 73.586H38.961zm303.657 73.586 42.485-73.586h45.488v73.586zm0 0"
                                            fill="#000000" data-original="#000000" class=""></path>
                                        <path
                                            d="M303.922 405.113a9.997 9.997 0 0 0-5-8.66l-87.856-50.723a10.006 10.006 0 0 0-10 0 9.997 9.997 0 0 0-5 8.66v101.446a9.995 9.995 0 0 0 5 8.656 9.983 9.983 0 0 0 10 0l87.856-50.719a9.997 9.997 0 0 0 5-8.66zm-87.856 33.403V371.71l57.856 33.402zM234.773 492c-5.507 0-10 4.492-10 10s4.493 10 10 10c5.512 0 10-4.492 10-10s-4.488-10-10-10zm0 0"
                                            fill="#000000" data-original="#000000" class=""></path>
                                    </g>
                                </g></svg>
                        </div>
                        Video
                    </button>
                </li>
                <li>
                    <button type="button" class="attachment-option-btn">
                        <div class="attachment-icon tag-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                 xml:space="preserve" class=""><g>
                                    <path
                                        d="M165.246 173.548c6.29 0 11.388-5.099 11.388-11.388s-5.099-11.388-11.388-11.388-11.388 5.099-11.388 11.388 5.099 11.388 11.388 11.388zM254.085 173.548c6.289 0 11.388-5.099 11.388-11.388s-5.099-11.388-11.388-11.388c-6.29 0-11.388 5.099-11.388 11.388s5.098 11.388 11.388 11.388zM177.049 219.84a39.628 39.628 0 0 0 32.616 17.146c13.02 0 25.214-6.41 32.617-17.146a7.44 7.44 0 0 0-12.246-8.446c-4.627 6.709-12.243 10.714-20.371 10.714s-15.743-4.006-20.37-10.714a7.438 7.438 0 1 0-12.246 8.446z"
                                        fill="#000000" data-original="#000000" class=""></path>
                                    <path
                                        d="M504.837 421.781 399.333 316.277a26.005 26.005 0 0 0-16.431-7.539l-31.499-2.366a156.12 156.12 0 0 0-67.227-26.234v-26.651a106.799 106.799 0 0 0 28.114-72.288v-57.093c7.956-1.6 15.717-3.937 23.12-6.985a128.417 128.417 0 0 1 2.674 26.12v124.465a7.439 7.439 0 1 0 14.878 0V143.241C352.961 64.258 288.703 0 209.719 0c-23.01 0-45.887 5.588-66.157 16.161a7.439 7.439 0 0 0 6.88 13.191c18.154-9.469 38.652-14.474 59.276-14.474 56.589 0 104.738 36.81 121.773 87.743-13.848 5.995-29.22 9.158-44.727 9.158-26.194 0-51.044-8.754-69.976-24.651a10.983 10.983 0 0 0-14.141.001c-18.931 15.896-43.782 24.65-69.975 24.65-15.513 0-30.845-3.154-44.692-9.143 6.918-20.706 19.059-39.563 35.526-54.5a7.438 7.438 0 0 0-9.996-11.019C83.62 64.23 66.476 102.911 66.476 143.243v165.566a157.039 157.039 0 0 0-23.699 21.412C16.841 358.954 2.556 396.115 2.556 434.858v18.011c0 6.836 5.562 12.398 12.398 12.398h148.691c-.23.208-.453.427-.66.668a7.438 7.438 0 0 0 .798 10.489 56.288 56.288 0 0 0 36.653 13.569c19.349 0 36.447-9.815 46.583-24.726H377.1l42.126 42.126a15.628 15.628 0 0 0 11.125 4.608c4.202 0 8.152-1.636 11.124-4.608l63.363-63.362a15.63 15.63 0 0 0 4.607-11.124 15.637 15.637 0 0 0-4.608-11.126zm-352.83-154.862c2.103 1.742 28.762 19.447 31.689 21.471 8.188 5.504 17.572 8.256 26.957 8.256 9.383-.001 18.771-2.753 26.957-8.256 3.055-2.112 29.476-19.652 31.689-21.47v24.563c0 26.224-21.335 47.559-47.559 47.559h-22.174c-26.224 0-47.559-21.335-47.559-47.559zm57.712-166.362c21.262 16.852 48.488 26.098 77.046 26.098 3.559 0 7.112-.148 10.647-.44V181.2a91.97 91.97 0 0 1-40.725 76.444l-27.376 18.4c-11.334 7.619-25.983 7.619-37.317 0l-27.375-18.4a91.965 91.965 0 0 1-40.726-76.444v-54.855c2.917.198 5.845.31 8.779.31 28.559 0 55.785-9.246 77.047-26.098zM81.355 143.241c0-8.838.925-17.587 2.705-26.118 7.978 3.284 16.359 5.744 24.957 7.341V181.2c0 27.13 10.227 52.81 28.141 72.316-.013.178-.027.356-.027.537v26.09a155.453 155.453 0 0 0-55.775 19.003V143.241zm119.081 331.874a41.4 41.4 0 0 1-26.804-9.849h29.376a7.439 7.439 0 1 0 0-14.878H17.433v-15.531c0-70.242 51.091-129.255 119.814-139.703 1.908 32.724 29.126 58.764 62.319 58.764h22.174c33.188 0 60.402-26.033 62.318-58.75a141.063 141.063 0 0 1 31.692 8.739c-3.698.298-7.202 1.872-9.864 4.535a15.71 15.71 0 0 0-4.562 12.301l1.603 21.356h-4.791c-31.038 0-56.288 25.251-56.288 56.288v35.315c0 22.836-18.577 41.413-41.412 41.413zm53.764-24.726a56.104 56.104 0 0 0 2.525-16.685v-35.315c0-22.834 18.577-41.411 41.411-41.411h5.908l2.139 28.481a26.004 26.004 0 0 0 7.538 16.429l48.501 48.501zm240.116-16.879-63.363 63.362a.854.854 0 0 1-1.208 0L324.242 391.369a11.125 11.125 0 0 1-3.224-7.026l-2.055-27.366h18.061c2.312 3.199 6.063 5.288 10.312 5.288 7.029 0 12.727-5.698 12.727-12.727s-5.698-12.727-12.727-12.727c-4.248 0-8 2.09-10.312 5.288h-19.178l-1.687-22.471a.82.82 0 0 1 .248-.667.817.817 0 0 1 .67-.248l64.713 4.86a11.112 11.112 0 0 1 7.024 3.223L494.318 432.3a.856.856 0 0 1-.002 1.21z"
                                        fill="#000000" data-original="#000000" class=""></path>
                                </g></svg>
                        </div>
                        Tag Friends
                    </button>
                </li>
                <li>
                    <button type="submit" class="social-theme-btn">Post</button>
                </li>
            </ul>
        </div>

        <div class="main-content posted-content">
            <div class="post-autore d-flex justify-content-between align-items-center">
                <div class="authore-title d-flex align-items-center">
                    <a href="#"><img src="{{asset("community-frontend/assets/images/community/home/news-post/Athore01.jpg")}}" alt="image"></a>
                    <div class="athore-info">
                        <p class="athore-name"><a href="#">Julie R. Morleyv</a></p>
                        <p class="posted-time"><a href="#">10 Mins Ago</a></p>
                    </div>
                </div>
                <div class="post-option">
                    <button type="button" class="dropdown-toggle" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"
                                                                               aria-hidden="true"></i></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a href="#" class="post-option-item"><i class="fa fa-pencil-square-o"
                                                                    aria-hidden="true"></i> Edit Post</a></li>
                        <li><a href="#" class="post-option-item"><i class="fa fa-eye-slash"
                                                                    aria-hidden="true"></i> Hide Post</a></li>
                        <li><a href="#" class="post-option-item"><i class="fa fa-trash-o"
                                                                    aria-hidden="true"></i> Delete Post</a></li>
                    </ul>
                </div>
            </div>
            <div class="post-body">
                <p class="post-status">Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero
                    malesuada feugiat. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget
                    malesuada. Praesent sapien massa convallis a pellentesque nec egestas non nisi. Curabitur
                    non nulla sit amet nisl tempus convallis quis.</p>
                <div class="post-img">
                    <img src="{{asset("community-frontend/assets/images/community/home/news-post/post-1.jpg")}}" alt="">
                </div>
                <ul class="post-react-widget">
                    <li class="post-react like-react">
                        <a href="#">
                            <div class="react-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0"
                                     viewBox="0 0 478.2 478.2" style="enable-background:new 0 0 512 512"
                                     xml:space="preserve" class=""><g>
                                        <path
                                            d="M457.575 325.1c9.8-12.5 14.5-25.9 13.9-39.7-.6-15.2-7.4-27.1-13-34.4 6.5-16.2 9-41.7-12.7-61.5-15.9-14.5-42.9-21-80.3-19.2-26.3 1.2-48.3 6.1-49.2 6.3h-.1c-5 .9-10.3 2-15.7 3.2-.4-6.4.7-22.3 12.5-58.1 14-42.6 13.2-75.2-2.6-97-16.6-22.9-43.1-24.7-50.9-24.7-7.5 0-14.4 3.1-19.3 8.8-11.1 12.9-9.8 36.7-8.4 47.7-13.2 35.4-50.2 122.2-81.5 146.3-.6.4-1.1.9-1.6 1.4-9.2 9.7-15.4 20.2-19.6 29.4-5.9-3.2-12.6-5-19.8-5h-61c-23 0-41.6 18.7-41.6 41.6v162.5c0 23 18.7 41.6 41.6 41.6h61c8.9 0 17.2-2.8 24-7.6l23.5 2.8c3.6.5 67.6 8.6 133.3 7.3 11.9.9 23.1 1.4 33.5 1.4 17.9 0 33.5-1.4 46.5-4.2 30.6-6.5 51.5-19.5 62.1-38.6 8.1-14.6 8.1-29.1 6.8-38.3 19.9-18 23.4-37.9 22.7-51.9-.4-8.1-2.2-15-4.1-20.1zm-409.3 122.2c-8.1 0-14.6-6.6-14.6-14.6V270.1c0-8.1 6.6-14.6 14.6-14.6h61c8.1 0 14.6 6.6 14.6 14.6v162.5c0 8.1-6.6 14.6-14.6 14.6h-61v.1zm383.7-133.9c-4.2 4.4-5 11.1-1.8 16.3 0 .1 4.1 7.1 4.6 16.7.7 13.1-5.6 24.7-18.8 34.6-4.7 3.6-6.6 9.8-4.6 15.4 0 .1 4.3 13.3-2.7 25.8-6.7 12-21.6 20.6-44.2 25.4-18.1 3.9-42.7 4.6-72.9 2.2h-1.4c-64.3 1.4-129.3-7-130-7.1h-.1l-10.1-1.2c.6-2.8.9-5.8.9-8.8V270.1c0-4.3-.7-8.5-1.9-12.4 1.8-6.7 6.8-21.6 18.6-34.3 44.9-35.6 88.8-155.7 90.7-160.9.8-2.1 1-4.4.6-6.7-1.7-11.2-1.1-24.9 1.3-29 5.3.1 19.6 1.6 28.2 13.5 10.2 14.1 9.8 39.3-1.2 72.7-16.8 50.9-18.2 77.7-4.9 89.5 6.6 5.9 15.4 6.2 21.8 3.9 6.1-1.4 11.9-2.6 17.4-3.5.4-.1.9-.2 1.3-.3 30.7-6.7 85.7-10.8 104.8 6.6 16.2 14.8 4.7 34.4 3.4 36.5-3.7 5.6-2.6 12.9 2.4 17.4.1.1 10.6 10 11.1 23.3.4 8.9-3.8 18-12.5 27z"
                                            fill="#000000" data-original="#000000" class=""></path>
                                    </g></svg>
                            </div>
                            <span class="react-name">Like</span>
                            <span class="react-count">2560</span>
                        </a>
                        <ul class="react-option">
                            <li><a href="#"><img src="{{asset("community-frontend/assets/images/community/home/news-post/react-1.png")}}"
                                                 alt="React"></a></li>
                            <li><a href="#"><img src="{{asset("community-frontend/assets/images/community/home/news-post/react-2.png")}}"
                                                 alt="React"></a></li>
                            <li><a href="#"><img src="{{asset("community-frontend/assets/images/community/home/news-post/react-3.png")}}"
                                                 alt="React"></a></li>
                            <li><a href="#"><img src="{{asset("community-frontend/assets/images/community/home/news-post/react-4.png")}}"
                                                 alt="React"></a></li>
                            <li><a href="#"><img src="{{asset("community-frontend/assets/images/community/home/news-post/react-5.png")}}"
                                                 alt="React"></a></li>
                            <li><a href="#"><img src="{{asset("community-frontend/assets/images/community/home/news-post/react-6.png")}}"
                                                 alt="React"></a></li>
                            <li><a href="#"><img src="{{asset("community-frontend/assets/images/community/home/news-post/react-7.png")}}"
                                                 alt="React"></a></li>
                        </ul>
                    </li>
                    <li class="post-react">
                        <a href="#">
                            <div class="react-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 32 32"
                                     style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                        <g fill="#000">
                                            <path
                                                d="M10 11a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM14 13a2 2 0 1 1 4 0 2 2 0 0 1-4 0zM22 11a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"
                                                fill="#000000" data-original="#000000"></path>
                                            <path fill-rule="evenodd"
                                                  d="M5 1a5 5 0 0 0-5 5v14a5 5 0 0 0 5 5h.012l.01 4.678a1 1 0 0 0 1.725.687L11.836 25H27a5 5 0 0 0 5-5V6a5 5 0 0 0-5-5zM2 6a3 3 0 0 1 3-3h22a3 3 0 0 1 3 3v14a3 3 0 0 1-3 3H11.406a1 1 0 0 0-.726.312l-3.664 3.862-.006-3.176a1 1 0 0 0-1-.998H5a3 3 0 0 1-3-3z"
                                                  clip-rule="evenodd" fill="#000000"
                                                  data-original="#000000"></path>
                                        </g>
                                    </g></svg>
                            </div>
                            <span class="react-name">Comment</span>
                            <span class="react-count">256</span>
                        </a>
                    </li>
                    <li class="post-react">
                        <a href="#">
                            <div class="react-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0"
                                     viewBox="0 0 512 512.001" style="enable-background:new 0 0 512 512"
                                     xml:space="preserve" class=""><g>
                                        <path
                                            d="M361.824 344.395c-24.531 0-46.633 10.593-61.972 27.445l-137.973-85.453A83.321 83.321 0 0 0 167.605 256a83.29 83.29 0 0 0-5.726-30.387l137.973-85.457c15.34 16.852 37.441 27.45 61.972 27.45 46.211 0 83.805-37.594 83.805-83.805C445.629 37.59 408.035 0 361.824 0c-46.21 0-83.804 37.594-83.804 83.805a83.403 83.403 0 0 0 5.726 30.386l-137.969 85.454c-15.34-16.852-37.441-27.45-61.972-27.45C37.594 172.195 0 209.793 0 256c0 46.21 37.594 83.805 83.805 83.805 24.53 0 46.633-10.594 61.972-27.45l137.97 85.454a83.408 83.408 0 0 0-5.727 30.39c0 46.207 37.593 83.801 83.804 83.801s83.805-37.594 83.805-83.8c0-46.212-37.594-83.805-83.805-83.805zm-53.246-260.59c0-29.36 23.887-53.246 53.246-53.246s53.246 23.886 53.246 53.246c0 29.36-23.886 53.246-53.246 53.246s-53.246-23.887-53.246-53.246zM83.805 309.246c-29.364 0-53.25-23.887-53.25-53.246s23.886-53.246 53.25-53.246c29.36 0 53.242 23.887 53.242 53.246s-23.883 53.246-53.242 53.246zm224.773 118.95c0-29.36 23.887-53.247 53.246-53.247s53.246 23.887 53.246 53.246c0 29.36-23.886 53.246-53.246 53.246s-53.246-23.886-53.246-53.246zm0 0"
                                            fill="#000000" data-original="#000000"></path>
                                    </g></svg>
                            </div>
                            <span class="react-name">share</span>
                            <span class="react-count">2506</span>
                        </a>
                    </li>
                </ul>
                <ul class="post-comment-list">
                    <li class="single-comment">
                        <div class="comment-img">
                            <a href="#">
                                <img src="{{asset("community-frontend/assets/images/community/home/news-post/comment01.jpg")}}" alt="image">
                            </a>
                        </div>
                        <div class="comment-details">
                            <div class="coment-info">
                                <h6><a href="#">David Moore</a></h6>
                                <span class="comment-time">10 Mint Ago</span>
                            </div>
                            <p class="comment-content">Donec rutrum congue leo eget malesuada nulla quis lorem
                                ut libero malesuada feugiat donec rutrum congue leo eget malesuada donec rutrum
                                congue leo eget malesuada. Praesent sapien massa convallis a pellentesque non
                                nisi curabitur non nulla sit amet nisl tempus convallis lectus.</p>
                            <ul class="coment-react">
                                <li class="comment-like"><a href="#">Like(2)</a></li>
                                <li><a href="#">Replay</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="single-comment">
                        <div class="comment-img">
                            <a href="#">
                                <img src="/assets/images/community/home/news-post/coment02.jpg" alt="image">
                            </a>
                        </div>
                        <div class="comment-details">
                            <div class="coment-info">
                                <h6><a href="#">Claire P. Toy</a></h6>
                                <span class="comment-time">5 Mint Ago</span>
                            </div>
                            <p class="comment-content">Donec rutrum congue leo eget malesuada praesent sapien
                                massa convallis a pellentesque nec egestas non nisi curabitur non nulla sit amet
                                nisl tempus convallis quis ac lectus.</p>
                            <ul class="coment-react">
                                <li class="comment-like"><a href="#">Like(2)</a></li>
                                <li><a href="#">Replay</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="single-comment">
                        <div class="comment-img">
                            <a href="#">
                                <img src="/assets/images/community/home/news-post/comment03.jpg" alt="image">
                            </a>
                        </div>
                        <div class="comment-details">
                            <div class="coment-info">
                                <h6><a href="#">Karen Williams</a></h6>
                                <span class="comment-time">3 Mint Ago</span>
                            </div>
                            <p class="comment-content">Donec rutrum congue leo eget malesuada nulla quis lorem
                                ut libero malesuada feugiat donec rutrum congue leo eget.</p>
                            <ul class="coment-react">
                                <li class="comment-like"><a href="#">Like(2)</a></li>
                                <li><a href="#">Replay</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="more-comment">
                    <a href="#">More Comments+</a>
                </div>

                <form action="#" class="new-comment">
                    <a class="new-comment-img" href="#"><img src="{{asset("community-frontend/assets/images/community/home/user-0.jpg")}}"
                                                             alt="Image"></a>
                    <div class="new-comment-input">
                        <input type="text" placeholder="Write a comment....">
                        <div class="attached-icon">
                            <a href="#"><i class="fa fa-camera" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection