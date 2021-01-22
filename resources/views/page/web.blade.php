<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DROP SHIPPING</title>

    <!-- UNIVERSAL STYLE SHEET -->
    <link rel="stylesheet" href="./asset/web-form/assets/css/style.css?v=1">

    <!-- TYPOGRAPHY -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Open+Sans:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/web-form/assets/css/extra-style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <!-- FONT ICONS KIT -->
    <script src="https://kit.fontawesome.com/74d240b4ae.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./asset/web-form/assets/css/pages-fix.css">

    <link rel="stylesheet" href="./asset/web-form/assets/css/page54.css">
    <link rel="stylesheet" href="./asset/main.css">

</head>

<body>
    <main id="page1" class="container-fluid extra__container__fluid">
        <div class="wrapper">
            <!-- navbar -->
            <nav>
                <div class="logo">
                    <img src="./asset/web-form/assets/images/diamond.webp" alt="logo">
                    <div class="logo-info">
                        <p>MJ DEVIGN</p>
                        <p>Design & Development Agency</p>
                    </div>
                </div>
            </nav>

            <!-- content section -->
            <div class="content">
                <div class="col1">
                    <div class="colTop">
                        <div class="logo-image_1">
                            <div class="row">
                                <div class="pr-0 col-md-2">
                                    <img src="./asset/web-form/assets/icons/web-development.png" alt="drop"
                                        style="width: 107px; height: 101px; object-fit: cover;">
                                </div>
                                <div class="col-md-10">
                                    <div class="mt-4 row">
                                        <div class="pl-0 col-md-12">
                                            <h3 class="text-h4" style="font-size: 28px !important;">
                                                <b>Website Development Package</b>
                                            </h3>
                                        </div>
                                        <div class="text-right col-md-12" style="font-size: 120%;">Welcome, {{ Auth::user()->first_name }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a href="#">
                            </a>
                        </div>
                    </div>
                    <div class="stepsMain">
                        <div class="stepActive active">
                            <div class="activeTop">
                                <h6 class="sBold">1.</h6>
                                <div class="activeImg first_img">
                                    <img src="./asset/web-form/assets/icons/step1.png" alt="step1">
                                </div>
                                <div class="activeDesc">
                                    <p class="sBold">

                                        STEP 1
                                    </p>
                                    <p class="slight">
                                        Choose Your Custom Domain Name
                                    </p>
                                </div>
                            </div>
                            <div class="px-4 activeBody bodyContainer" id="pad__left__none">

                            <form action="" >
                                <div class="inputArea">
                                    <div class="form-check form-check2">
                                        <input class="form-check-input " type="radio" name="exampleRadios" name="test1"
                                            onclick="show(1)" id="exampleRadios1" value="option1" checked>
                                        <label for="exampleRadios1">
                                            <b class="common-font">Register a New Domain</b>
                                        </label>
                                    </div>
                                    <div class="w-100 d-none" id="reg_new" style="margin-left: 25px">
                                        <div class="iBtn">
                                            <div
                                                style="width: 100%; margin-right: 2%; margin-left: 2%;margin-top: 20px;text-align: left !important;">
                                                <label>Enter a domain name for your store</label>
                                                <input type="text" name="text_domain" placeholder="www.">
                                            </div>
                                        </div>
                                        <p class="my_sitecom" style="margin-right: 2%; font-size: 15px">
                                            <small></small>Click <a href="">here</a> to check your domain name is
                                            available. Once you find one, type it above and we will take care of the
                                            rest!</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="inputArea">
                                    <div class="form-check form-check2">
                                        <input class="form-check-input" type="radio" name="exampleRadios" name="test1"
                                            onclick="show(2)" id="exampleRadios2" value="option1">
                                        <label for="exampleRadios2">
                                            <b class="common-font">I Already Own a Domain</b>
                                        </label>
                                    </div>

                                    <div class="pt-4 row w-100 d-none" id="already_own" style="margin-left: -5px">
                                        <div class="col-md-6 col-12">
                                            <div class="px-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Enter your existing domain
                                                        name:</label>
                                                    <input type="email" class="py-4 common-input form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        placeholder="www.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="px-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Enter your domain provider:</label>
                                                    <form action="">
                                                        <input type="email" class="py-4 common-input form-control"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                                            placeholder="Your domain provider">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 domain-alreay__checkbox">
                                            <div class="px-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="p-1 form-check-input"
                                                        onclick="checked(this)" id="exampleCheck3">
                                                    <label class="form-check-label" for="exampleCheck3">
                                                        I also have hosting
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 domain-alreay__msg">
                                            <div class="mt-4">
                                                <span class="h5">We will remove our hosting from your package saving you
                                                    $100.00.</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="nextBtn">
                                <a style="margin-right: 5px;" href="" class="prev_action">
                                    <button class="btn2">
                                        BACK
                                    </button>
                                </a>

                                <a  href="" class="button next_action">Next
                                </a>

                            </div>
                        </form>
                            <div class="stepActive">
                            <div class="activeTop">
                                <h6 class="sBold">2.</h6>
                                <div class="activeImg">
                                    <img src="./asset/web-form/assets/icons/report.png" alt="step1">
                                </div>
                                <div class="activeDesc">
                                    <p class="sBold">

                                        STEP 2
                                    </p>
                                    <p class="slight">
                                        Website Details
                                    </p>
                                </div>
                            </div>
                            <div class="bodyContainer">
                                <div class="activeBody">

                                    <div class="category">
                                        <!--  <div class="heading">
                                              <svg preserveAspectRatio="xMidYMid meet" data-bbox="43.5 62 113 76.001"
                                                  viewBox="43.5 62 113 76.001" height="200" width="200"
                                                  xmlns="http://www.w3.org/2000/svg" data-type="color" role="img">
                                                  <g>
                                                      <path
                                                          d="M153.128 131.287H127.49c.007-.065.021-.129.021-.196V86.632c0-.061-.013-2.362-.019-2.421l-3.872 1.901v44.979c0 .067.013.131.021.196h-14.004c.007-.062.02-.122.02-.185V92.908l-3.89 1.91v36.283c0 .064.013.123.02.185H91.802V101.28l-.653.32a3.377 3.377 0 0 1-3.237-.146v29.833H72.599V95.213l-3.89 2.222v33.852H50.245v-22.324l.554-1.235.226-2.402.104-3.283-.883-.82V65.357c0-1.854-1.51-3.357-3.373-3.357S43.5 63.503 43.5 65.357v69.287a3.365 3.365 0 0 0 3.373 3.357h106.255c1.863 0 3.372-1.503 3.372-3.357s-1.51-3.357-3.372-3.357z"
                                                          fill="#363535" data-color="1" />
                                                      <path
                                                          d="M146.656 72.912a3.373 3.373 0 0 0-2.5-1.727l-16.769-2.327a3.374 3.374 0 0 0-3.25 1.43 3.342 3.342 0 0 0-.158 3.534l3.029 5.383-33.93 16.66.119-13.345a3.352 3.352 0 0 0-1.669-2.926 3.383 3.383 0 0 0-3.382-.014l-37.901 21.644v7.74L68.709 98.42l3.89-2.222L86.4 88.316l-.115 12.942a3.352 3.352 0 0 0 1.579 2.872c.015.01.033.013.048.022a3.377 3.377 0 0 0 3.237.146l.653-.32 13.964-6.856 3.89-1.91 13.964-6.856 3.872-1.901 2.817-1.383 3.38 6.006a3.374 3.374 0 0 0 3.062 1.714 3.374 3.374 0 0 0 2.932-1.925l7.06-14.927a3.35 3.35 0 0 0-.087-3.028zm-10.286 9.194l-.005-.009.012-.006-.007.015z"
                                                          fill="#BAD2FF" data-color="2" />
                                                  </g>
                                              </svg>

                                              <br />

                                          </div>---->
                                        <h2 class="websites-info ">
                                            Website Information
                                        </h2>
                                        <div class="container-fluid">
                                            <div class="sec-space">


                                                <div class="form-sec">
                                                    <div class="names">
                                                        <p class="busniess">
                                                            Name Of Your Business, Organisation Or Idea:

                                                        </p>

                                                        <label for="names" value="No - Create one for me (Free)"><b></b></label>
                                                        <div class="width_manage">
                                                            <input  type="text" placeholder="Website Name" name="name" id="name">
                                                        </div>

                                                    </div>
                                                    <div class="activeBody no width ">
                                                        <p class="busniess">Do You Have A Logo?</p>
                                                        <div class="table_on-staep_3">

                                                            <div class="checks">
                                                                <input type="checkbox" name="" id="ContentWriting">
                                                                <label for="ContentWriting">No - Create one for me (Free)</label>
                                                            </div>
                                                            <div class="checks">
                                                                <input type="checkbox" name="" id="Testimonials">
                                                                <label for="Testimonials">Yes</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="names">
                                                        <p class="busniesss">
                                                            Tell Us About Your Business, Organisation Or Idea:
                                                        </p>
                                                        <label for="name" value="No - Create one for me (Free)"><b></b></label>
                                                        <textarea id="name" class="_1qIig has-custom-focus"  rows="4" cols="113" placeholder="Help us tailor our design and development approach by providing information about your business, organisation or idea."></textarea>
                                                    </div>
                                                    <div class="names">
                                                        <p class="busniess">
                                                            What Will Your Website Be Used For?
                                                        </p>
                                                        <label for="name" value="No - Create one for me (Free)"><b></b></label>
                                                        <textarea id="name" class="_1qIig has-custom-focus"  rows="4" cols="113" placeholder="Tell us what you want to achieve from your website. For example: to sell products, create a blog, take online bookings, provide businss information, promotion."></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="nextBtn">
                                    <a style="margin-right: 5px;" href="./asset/web-form/page2.html" class="prev_action">
                                        <button class="btn2">
                                            BACK
                                        </button>
                                    </a>
                                    <a href="./asset/web-form/page3.html" class="next_action">
                                        <button class="button">
                                            Next
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="stepActive">
                            <div class="activeTop">
                                <h6 class="sBold">3.</h6>
                                <div class="activeImg">
                                    <img src="./asset/web-form/assets/icons/step3Head.png" alt="step1">
                                </div>
                                <div class="activeDesc">
                                    <p class="sBold">
                                        STEP 3
                                    </p>
                                    <p class="slight head">
                                        Website Pages &amp; Content
                                    </p>
                                </div>
                            </div>
                            <div class="bodyContainer">
                                <div class="step3">

                                    <p class="sBold homes">
                                        <span class="page1"> Page 1.</span><span class="pageshome"> Home Page</span>
                                    </p>
                                </div>
                                <div class="step3 bg-gray">

                                    <form action="" class="form">
                                        <div class="bg-gray">
                                            <div class="width">

                                                <div class="activeBody no text-cont">
                                                    <div class="width-50">
                                                        <p class="mt-2 bold mt-2s">
                                                            Text Content:
                                                        </p>
                                                        <textarea id="text-content" rows="6" cols="50" placeholder="Write what text content and any other information you would like displayed on your home page. Alternitively, we can professionally write the content for all of your pages with our content writing add on." class="text-place"></textarea>
                                                    </div>
                                                    <div class="width-50 medias">
                                                        <p class="mt-2 bold uploads">Upload Media:</p>
                                                        <span class="media">Upload any media such as images, videos or ideas
                                                        that you would like included on this page. Alternatively, we
                                                        will research and source content based on the
                                                        Informationormationormationon you have provided.</span><br>
                                                        <button class="browse">Browse</button>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="activeBody no width">
                                                <p class="mt-2 bold mt-2s" style="margin-left: 20px;">Include on this page:</p>
                                                <table class="table_on-staep_3 spaces add-pages">
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" name="" id="add_pages_1">
                                                            <label for="add_pages_1">Content Writing - $119.00</label>
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="" id="add_pages_2">
                                                            <label for="add_pages_2">Testimonials</label>
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="" id="UserForm">
                                                            <label for="UserForm">User Form</label>

                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="" id="PhotoGallary">
                                                            <label for="PhotoGallary">Photo Gallary</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" name="" id="PollFree">
                                                            <label for="PollFree">Poll Free</label>
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="" id="socialMedia">
                                                            <label for="socialMedia">Links to Social Media</label>
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="" id="subscription">
                                                            <label for="subscription">Newsletter Subscription</label>
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="" id="LocationMap">
                                                            <label for="LocationMap">Location Map</label>
                                                        </td>
                                                    </tr>

                                                </table>

                                                <div class="add-pages-container" style="padding: 0 20px;">

                                                    <div class="optionalRow">
                                                        <div class="left">
                                                            <img src="./asset/web-form/assets/icons/writing.webp" alt="">
                                                            <p>
                                                                Content<br>Writing
                                                            </p>
                                                        </div>
                                                        <div class="right">
                                                            <a class="link-remove" href=""><img src="./asset/web-form/assets/icons/trash (2).webp" alt=""></a>
                                                            <p class="bold">
                                                                Content Writing
                                                            </p>
                                                            <div class="checkBox d-flex">
                                                                <input type="checkbox" id="price">
                                                                <label for="price">
                                                                    $249.00 - Add To Package
                                                                </label>
                                                            </div>
                                                            <p class="details">
                                                                Not sure what to write on your website? Leave it to us. We will professionally write up to 800 words of content based off the information you have provided us. <a href="javascript:void(0)">
                                                                Learn more
                                                            </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- dropdown view 2 -->
                                        <div class="dropdown-view bors">
                                            <!-- start dropdown -->
                                            <div class="dropdown d_for_step3">
                                                <label for="cars" class="page1">Page 2.</label>
                                                <select name="cars" id="lable-page" onchange="toggledropdown(this)">
                                                    <option value="hide">Select option</option>
                                                    <option value="About us page">About us page</option>
                                                    <option value="Online Bookings - $99.00">Online Bookings -
                                                        $99.00</option>
                                                    <option value="Sell Products or Services - $99.00">Sell
                                                        Products or Services - $99.00</option>
                                                    <option value="Event Manager - $99.00">Event Manager -
                                                        $99.00</option>
                                                    <option value="Additional Page - $99.00">Additional Page -
                                                        $99.00</option>
                                                    <option value="Contact us page">Contact us page</option>
                                                    <option value="Blog Page">Blog Page</option>
                                                    <option value="FAQ Page">FAQ Page</option>
                                                    <option value="User Form Page" selected="">User Form Page
                                                    </option>
                                                    <option value="Custom Page">Custom Page</option>
                                                    <option value="Gallery Page">Gallery Page</option>
                                                    <option value="Informative Page">Informative Page</option>
                                                    <option value="Testimonial Page">Testimonial Page</option>
                                                    <option value="Fourm - $99.00">Fourm - $99.00</option>
                                                    <option value="hide">Leave blank for now
                                                    </option>
                                                    <option value="hide">Not sure?
                                                        Let us decide for you</option>
                                                </select>
                                            </div>
                                            <!-- other pages dropdown -->
                                            <div class="other-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Write what text content and any other information or ideas you would like displayed on this page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user form page dropdown -->
                                            <div class="user-form-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Describe your form and anything else you may want included on this page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- faq page dropdown -->
                                            <div class="faq-form-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Enter in frequently asked questions and answers as well as any other text content and information that you would like displayed on your FAQ page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- contact us page dropdown -->
                                            <div class="contact-form-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Write what text content and any other information you would like displayed on your contact page. For example your address, contact details, hours of business. We will include a 'contact us' form and a location map." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- additional page dropdown -->
                                            <div class="additional-page-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Additional Page - $99.00</span>
                                                    <a href="#">Add another page</a>
                                                    <a href="#" style="margin-left: 15px;">Remove this page</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Write what text content and any other information or ideas you would like displayed on this page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- online booking page dropdown -->
                                            <div class="online-booking-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Online Bookings - $99.00</span>
                                                    <span>We will integrate an easy to manage booking system into your
                                                    website.
                                                    Online bookings can be used for general appointments, specific
                                                    services
                                                    or reservations. You can charge your client a deposit, full amount
                                                    or
                                                    nothing at all during the book in process and your schedule will
                                                    update
                                                    accordingly. Training and support included.</span>
                                                    <a href="#">Remove this feature</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Tell us what sort of online bookings you want on your website." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sell product page dropdown -->
                                            <div class="sell-product-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Selling products or services - $99.00</span>
                                                    <span>we will integerate an easy to manage ecommerce platform into your
                                                    website that will allow you to list products or services you offer
                                                    and
                                                    manage products from your admin panel</span>
                                                    <a href="#">Remove this feature</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Tell us about the products or services you are wanting to sell on your website." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- event manager page dropdown -->
                                            <div class="event-manager-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Event Manager- $99.00</span>
                                                    <span>We will integrate a event manager platform into your website.
                                                    Perfect
                                                    for creating events, selling tickets and collecting RSVPs. Great for
                                                    weddings, concerts, gatherings and more.</span>
                                                    <a href="#">Remove this feature</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Tell us about the type of events that you will need to manage.." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- dropdown view 3 -->
                                        <div class="dropdown-view bors">
                                            <div class="dropdown d_for_step3">
                                                <label for="cars" class="page1">Page 3.</label>
                                                <select name="cars" id="lable-page" onchange="toggledropdown(this)">
                                                    <option value="hide">Select option</option>
                                                    <option value="About us page">About us page</option>
                                                    <option value="Online Bookings - $99.00">Online Bookings -
                                                        $99.00</option>
                                                    <option value="Sell Products or Services - $99.00">Sell
                                                        Products or Services - $99.00</option>
                                                    <option value="Event Manager - $99.00">Event Manager -
                                                        $99.00</option>
                                                    <option value="Additional Page - $99.00">Additional Page -
                                                        $99.00</option>
                                                    <option value="Contact us page">Contact us page</option>
                                                    <option value="Blog Page">Blog Page</option>
                                                    <option value="FAQ Page" selected="">FAQ Page</option>
                                                    <option value="User Form Page">User Form Page</option>
                                                    <option value="Custom Page">Custom Page</option>
                                                    <option value="Gallery Page">Gallery Page</option>
                                                    <option value="Informative Page">Informative Page</option>
                                                    <option value="Testimonial Page">Testimonial Page</option>
                                                    <option value="Fourm - $99.00">Fourm - $99.00</option>
                                                    <option value="hide">Leave blank for now
                                                    </option>
                                                    <option value="hide">Not sure?
                                                        Let us decide for you</option>
                                                </select>
                                            </div>
                                            <!-- other pages dropdown -->
                                            <div class="other-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Write what text content and any other information or ideas you would like displayed on this page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user form page dropdown -->
                                            <div class="user-form-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Describe your form and anything else you may want included on this page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- faq page dropdown -->
                                            <div class="faq-form-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Enter in frequently asked questions and answers as well as any other text content and information that you would like displayed on your FAQ page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- contact us page dropdown -->
                                            <div class="contact-form-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Write what text content and any other information you would like displayed on your contact page. For example your address, contact details, hours of business. We will include a 'contact us' form and a location map." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- additional page dropdown -->
                                            <div class="additional-page-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Additional Page - $99.00</span>
                                                    <a href="#">Add another page</a>
                                                    <a href="#" style="margin-left: 15px;">Remove this page</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Write what text content and any other information or ideas you would like displayed on this page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- online booking page dropdown -->
                                            <div class="online-booking-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Online Bookings - $99.00</span>
                                                    <span>We will integrate an easy to manage booking system into your
                                                    website.
                                                    Online bookings can be used for general appointments, specific
                                                    services
                                                    or reservations. You can charge your client a deposit, full amount
                                                    or
                                                    nothing at all during the book in process and your schedule will
                                                    update
                                                    accordingly. Training and support included.</span>
                                                    <a href="#">Remove this feature</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Tell us what sort of online bookings you want on your website." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sell product page dropdown -->
                                            <div class="sell-product-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Selling products or services - $99.00</span>
                                                    <span>we will integerate an easy to manage ecommerce platform into your
                                                    website that will allow you to list products or services you offer
                                                    and
                                                    manage products from your admin panel</span>
                                                    <a href="#">Remove this feature</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Tell us about the products or services you are wanting to sell on your website." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- event manager page dropdown -->
                                            <div class="event-manager-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Event Manager- $99.00</span>
                                                    <span>We will integrate a event manager platform into your website.
                                                    Perfect
                                                    for creating events, selling tickets and collecting RSVPs. Great for
                                                    weddings, concerts, gatherings and more.</span>
                                                    <a href="#">Remove this feature</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Tell us about the type of events that you will need to manage.." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- dropdown view 4 -->
                                        <div class="dropdown-view bors">
                                            <div class="dropdown d_for_step3">
                                                <label for="cars" class="page1">Page 4.</label>
                                                <select name="cars" id="lable-page" onchange="toggledropdown(this)">
                                                    <option value="hide">Select option</option>
                                                    <option value="About us page">About us page</option>
                                                    <option value="Online Bookings - $99.00">Online Bookings -
                                                        $99.00</option>
                                                    <option value="Sell Products or Services - $99.00">Sell
                                                        Products or Services - $99.00</option>
                                                    <option value="Event Manager - $99.00">Event Manager -
                                                        $99.00</option>
                                                    <option value="Additional Page - $99.00">Additional Page -
                                                        $99.00</option>
                                                    <option value="Contact us page" selected="">Contact us
                                                        page</option>
                                                    <option value="Blog Page">Blog Page</option>
                                                    <option value="FAQ Page">FAQ Page</option>
                                                    <option value="User Form Page">User Form Page</option>
                                                    <option value="Custom Page">Custom Page</option>
                                                    <option value="Gallery Page">Gallery Page</option>
                                                    <option value="Informative Page">Informative Page</option>
                                                    <option value="Testimonial Page">Testimonial Page</option>
                                                    <option value="Fourm - $99.00">Fourm - $99.00</option>
                                                    <option value="hide">Leave blank for now
                                                    </option>
                                                    <option value="hide">Not sure?
                                                        Let us decide for you</option>
                                                </select>
                                            </div>

                                            <!-- other pages dropdown -->
                                            <div class="other-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Write what text content and any other information or ideas you would like displayed on this page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user form page dropdown -->
                                            <div class="user-form-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Describe your form and anything else you may want included on this page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- faq page dropdown -->
                                            <div class="faq-form-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Enter in frequently asked questions and answers as well as any other text content and information that you would like displayed on your FAQ page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- contact us page dropdown -->
                                            <div class="contact-form-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Write what text content and any other information you would like displayed on your contact page. For example your address, contact details, hours of business. We will include a 'contact us' form and a location map." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- additional page dropdown -->
                                            <div class="additional-page-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Additional Page - $99.00</span>
                                                    <a href="#">Add another page</a>
                                                    <a href="#" style="margin-left: 15px;">Remove this page</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Write what text content and any other information or ideas you would like displayed on this page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- online booking page dropdown -->
                                            <div class="online-booking-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Online Bookings - $99.00</span>
                                                    <span>We will integrate an easy to manage booking system into your
                                                    website.
                                                    Online bookings can be used for general appointments, specific
                                                    services
                                                    or reservations. You can charge your client a deposit, full amount
                                                    or
                                                    nothing at all during the book in process and your schedule will
                                                    update
                                                    accordingly. Training and support included.</span>
                                                    <a href="#">Remove this feature</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Tell us what sort of online bookings you want on your website." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sell product page dropdown -->
                                            <div class="sell-product-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Selling products or services - $99.00</span>
                                                    <span>we will integerate an easy to manage ecommerce platform into your
                                                    website that will allow you to list products or services you offer
                                                    and
                                                    manage products from your admin panel</span>
                                                    <a href="#">Remove this feature</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Tell us about the products or services you are wanting to sell on your website." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- event manager page dropdown -->
                                            <div class="event-manager-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Event Manager- $99.00</span>
                                                    <span>We will integrate a event manager platform into your website.
                                                    Perfect
                                                    for creating events, selling tickets and collecting RSVPs. Great for
                                                    weddings, concerts, gatherings and more.</span>
                                                    <a href="#">Remove this feature</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Tell us about the type of events that you will need to manage.." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- dropdown view 5 -->
                                        <div class="dropdown-view borss">
                                            <div class="dropdown d_for_step3">
                                                <label for="cars" class="page1">Page 5.</label>
                                                <select name="cars" id="lable-page" onchange="toggledropdown(this)">
                                                    <option value="hide">Select option</option>
                                                    <option value="About us page">About us page</option>
                                                    <option value="Online Bookings - $99.00">Online Bookings -
                                                        $99.00</option>
                                                    <option value="Sell Products or Services - $99.00">Sell
                                                        Products or Services - $99.00</option>
                                                    <option value="Event Manager - $99.00">Event Manager -
                                                        $99.00</option>
                                                    <option value="Additional Page - $99.00" selected="">
                                                        Additional Page - $99.00</option>
                                                    <option value="Contact us page">Contact us page</option>
                                                    <option value="Blog Page">Blog Page</option>
                                                    <option value="FAQ Page">FAQ Page</option>
                                                    <option value="User Form Page">User Form Page</option>
                                                    <option value="Custom Page">Custom Page</option>
                                                    <option value="Gallery Page">Gallery Page</option>
                                                    <option value="Informative Page">Informative Page</option>
                                                    <option value="Testimonial Page">Testimonial Page</option>
                                                    <option value="Fourm - $99.00">Fourm - $99.00</option>
                                                    <option value="hide">Leave blank for now
                                                    </option>
                                                    <option value="hide">Not sure?
                                                        Let us decide for you</option>
                                                </select>
                                            </div>

                                            <!-- other pages dropdown -->
                                            <div class="other-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Write what text content and any other information or ideas you would like displayed on this page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- user form page dropdown -->
                                            <div class="user-form-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Describe your form and anything else you may want included on this page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- faq page dropdown -->
                                            <div class="faq-form-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Enter in frequently asked questions and answers as well as any other text content and information that you would like displayed on your FAQ page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- contact us page dropdown -->
                                            <div class="contact-form-page-dropdown dropdown-content">
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Write what text content and any other information you would like displayed on your contact page. For example your address, contact details, hours of business. We will include a 'contact us' form and a location map." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- additional page dropdown -->
                                            <div class="additional-page-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Additional Page - $99.00</span>
                                                    <a href="#">Add another page</a>
                                                    <a href="#" style="margin-left: 15px;">Remove this page</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Write what text content and any other information or ideas you would like displayed on this page." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- online booking page dropdown -->
                                            <div class="online-booking-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Online Bookings - $99.00</span>
                                                    <span>We will integrate an easy to manage booking system into your
                                                    website.
                                                    Online bookings can be used for general appointments, specific
                                                    services
                                                    or reservations. You can charge your client a deposit, full amount
                                                    or
                                                    nothing at all during the book in process and your schedule will
                                                    update
                                                    accordingly. Training and support included.</span>
                                                    <a href="#">Remove this feature</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Tell us what sort of online bookings you want on your website." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sell product page dropdown -->
                                            <div class="sell-product-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Selling products or services - $99.00</span>
                                                    <span>we will integerate an easy to manage ecommerce platform into your
                                                    website that will allow you to list products or services you offer
                                                    and
                                                    manage products from your admin panel</span>
                                                    <a href="#">Remove this feature</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Tell us about the products or services you are wanting to sell on your website." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- event manager page dropdown -->
                                            <div class="event-manager-dropdown dropdown-content">
                                                <div class="prices-portion">
                                                    <span>Event Manager- $99.00</span>
                                                    <span>We will integrate a event manager platform into your website.
                                                    Perfect
                                                    for creating events, selling tickets and collecting RSVPs. Great for
                                                    weddings, concerts, gatherings and more.</span>
                                                    <a href="#">Remove this feature</a>
                                                </div>
                                                <div class="step3 bg-gray">
                                                    <div class="bg-gray">
                                                        <div class="width borss">
                                                            <div class="activeBody text-cont">
                                                                <div class="width-50">
                                                                    <p class="mt-2 bold mt-2s">
                                                                        Text Content:
                                                                    </p>
                                                                    <textarea rows="6" cols="50" placeholder="Tell us about the type of events that you will need to manage.." class="text-place"></textarea>
                                                                </div>
                                                                <div class="width-50 medias">
                                                                    <p class="mt-2 bold uploads">Upload Media:</p>
                                                                    <span class="media">
                                                                    Upload any media such as images, videos or ideas
                                                                    that you would like included on this page.
                                                                    Alternatively, we will research and source content
                                                                    based on the Informationormationormationon you have
                                                                    provided.
                                                                </span>
                                                                    <br>
                                                                    <button class="browse">Browse</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end drodown -->
                                    </form>
                                </div>
                                <div class="activeBody">
                                    <div class="add">
                                        <p class="slight" style="
                                    color: #c1c1c1;">
                                            Additional Features
                                        </p>
                                        <p>
                                            Additional features can be added now, during or after development.
                                        </p>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="sec-space">


                                            <div class="sell-">

                                                <div class="names">

                                                    <table class="table_on-staep_3 add-feature">
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="" id="Services">
                                                                <label for="Services">Email Template - $99.00</label>
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" name="" id="Onlinebookings" >
                                                                <label for="Onlinebookings">Content Writing - $249.00</label>
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" name="" id="AdditionalPages" >
                                                                <label for="AdditionalPages">Promotional Video - $349.00</label>

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="" id="BusinessEmail" >
                                                                <label for="BusinessEmail">Live chat - $99.00</label>
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" name="" id="Content">
                                                                <label for="Content">Social Media Package - $129.00</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="" id="Livechat">
                                                                <label for="Livechat">Multilingual - $99.00</label>
                                                            </td>
                                                            <td>
                                                                <input type="checkbox" name="" id="socialMediapkg" >
                                                                <label for="socialMediapkg">Marketing Campaign - $179.00</label>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <div class="add-feature-container">
                                                        <div class="optionalRow">
                                                            <div class="left">
                                                                <img src="./asset/web-form/assets/icons/mail.webp" alt="">
                                                                <p>
                                                                    Email<br>Template
                                                                </p>
                                                            </div>
                                                            <div class="right">
                                                                <a class="link-remove" href=""><img src="./asset/web-form/assets/icons/trash (2).webp" alt=""></a>
                                                                <p class="bold">
                                                                    Professional Email Template
                                                                </p>
                                                                <div class="checkBox d-flex">
                                                                    <input type="checkbox" id="price">
                                                                    <label for="price">
                                                                        $99.00 - Add To Package
                                                                    </label>
                                                                </div>
                                                                <p class="details">
                                                                    We design you an email template so that when your clients open mail from you it is displayed professionally with your own personalised brand. <a href="javascript:void(0)">
                                                                    Learn more
                                                                </a>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="optionalRow">
                                                            <div class="left">
                                                                <img src="./asset/web-form/assets/icons/writing.webp" alt="">
                                                                <p>
                                                                    Content<br>Writing
                                                                </p>
                                                            </div>
                                                            <div class="right">
                                                                <a class="link-remove" href=""><img src="./asset/web-form/assets/icons/trash (2).webp" alt=""></a>
                                                                <p class="bold">
                                                                    Content Writing
                                                                </p>
                                                                <div class="checkBox d-flex">
                                                                    <input type="checkbox" id="100">
                                                                    <label for="100">
                                                                        $249.00 - Add To Package
                                                                    </label>
                                                                </div>
                                                                <p class="details">
                                                                    Not sure what to write on your website? Leave it to us. We will professionally write up to 800 words of content based off the information you have provided us. <a href="javascript:void(0)">
                                                                    Learn more
                                                                </a>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="optionalRow">
                                                            <div class="left">
                                                                <img src="./asset/web-form/assets/icons/browser.webp" alt="">
                                                                <p>
                                                                    Promotional<br>Video
                                                                </p>
                                                            </div>
                                                            <div class="right">
                                                                <a class="link-remove" href=""><img src="./asset/web-form/assets/icons/trash (2).webp" alt=""></a>
                                                                <p class="bold">
                                                                    Promotional Video
                                                                </p>
                                                                <div class="checkBox d-flex">
                                                                    <input type="checkbox" id="179">
                                                                    <label for="179">
                                                                        $349.00 - Add To Package
                                                                    </label>
                                                                </div>
                                                                <p class="details">
                                                                    We create you a minute long animated promotional or explainer video that can be integrated into your website and social media. <a
                                                                        href="javascript:void(0)">
                                                                    Learn more
                                                                </a>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="optionalRow">
                                                            <div class="left">
                                                                <img src="./asset/web-form/assets/icons/livechat.png" alt="">
                                                                <p>
                                                                    Live<br>Chat
                                                                </p>
                                                            </div>
                                                            <div class="right">
                                                                <a class="link-remove" href=""><img src="./asset/web-form/assets/icons/trash (2).webp" alt=""></a>
                                                                <p class="bold">
                                                                    Live Chat

                                                                </p>
                                                                <div class="checkBox d-flex">
                                                                    <input type="checkbox" id="130">
                                                                    <label for="130">
                                                                        $99.00 - Add To Package
                                                                    </label>
                                                                </div>
                                                                <p class="details">
                                                                    Allow your audience to contact you directly when you are online with the live chat feature. It will work similarly to the one that we are using on this page. <a href="javascript:void(0)">
                                                                    Learn more
                                                                </a>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="optionalRow">
                                                            <div class="left">
                                                                <img src="./asset/web-form/assets/icons/social-media.webp" alt="">
                                                                <p>
                                                                    Social<br>Media Package
                                                                </p>
                                                            </div>
                                                            <div class="right">
                                                                <a class="link-remove" href=""><img src="./asset/web-form/assets/icons/trash (2).webp" alt=""></a>
                                                                <p class="bold">
                                                                    Social Media Package
                                                                </p>
                                                                <div class="checkBox d-flex">
                                                                    <input type="checkbox" id="199">
                                                                    <label for="199">
                                                                        $129.00 - Add To Package
                                                                    </label>
                                                                </div>
                                                                <p class="details">
                                                                    We will set you up with a Facebook, Instagram and Twitter account with appealing  banners and content. <a
                                                                        href="javascript:void(0)">
                                                                    Learn more
                                                                </a>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="optionalRow">
                                                            <div class="left">
                                                                <img src="./asset/web-form/assets/icons/languages.webp" alt="">
                                                                <p>
                                                                    Multilingual
                                                                </p>
                                                            </div>
                                                            <div class="right">
                                                                <a class="link-remove" href=""><img src="./asset/web-form/assets/icons/trash (2).webp" alt=""></a>
                                                                <p class="bold">
                                                                    Multilingual
                                                                </p>
                                                                <div class="checkBox d-flex">
                                                                    <input type="checkbox" id="199">
                                                                    <label for="199">
                                                                        $99.00 - Add To Package
                                                                    </label>
                                                                </div>
                                                                <p class="details">
                                                                    We integrate a plugin that will allow your users to view your websites content in their native language based off their geolocation. <a
                                                                        href="javascript:void(0)">
                                                                    Learn more
                                                                </a>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="optionalRow">
                                                            <div class="left">
                                                                <img src="./asset/web-form/assets/icons/megaphone (1).webp" alt="">
                                                                <p>
                                                                    Marketing<br>Campaign
                                                                </p>
                                                            </div>
                                                            <div class="right">
                                                                <a class="link-remove" href=""><img src="./asset/web-form/assets/icons/trash (2).webp" alt=""></a>
                                                                <p class="bold">
                                                                    Marketing Campaign
                                                                </p>
                                                                <div class="checkBox d-flex">
                                                                    <input type="checkbox" id="249">
                                                                    <label for="249">
                                                                        $179.00 - Add To Package
                                                                    </label>
                                                                </div>
                                                                <p class="details">
                                                                    Targeting your audience, we set you up with a marketing campaign for Google & Facebook with a $100 voucher to get started. <a href="javascript:void(0)">
                                                                    Learn more
                                                                </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="comp-kj85kbqc" class="bors"></div>
                                <div class="nextBtn">
                                    <a href="./asset/web-form/page2.html" class="prev_action">
                                        <button class="mt-2 back-button">
                                            BACK
                                        </button>
                                    </a>
                                    <a href="./asset/web-form/page4.html" class="next_action">
                                        <button class="mt-2 button">
                                            Next
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="stepActive">
                            <div class="activeTop">
                                <h6 class="sBold">4.</h6>
                                <div class="activeImg">
                                    <img src="./asset/web-form/assets/icons/step6.png" alt="step1">
                                </div>
                                <div class="activeDesc">
                                    <p class="sBold">
                                        STEP 4
                                    </p>
                                    <p class="slight">
                                        Checkout
                                    </p>
                                </div>
                            </div>
                            <div class="activeBody bodyContainer stores">
                                <p class="mt-2">
                                    Select your payment method
                                </p>
                                <div class="outer-box">
                                    <div class="checkout-image">
                                        <label class="_2_LU_"><input type="radio" class="Qg8Oo" checked="" value="Credit / Debit Card" name="comp-kjjsylbi1">Credit / Debit Card</label>
                                        <img src="icons/credit-card.jpg" alt="step1">
                                    </div>
                                    <div class="checkout-image">
                                        <label class="_2_LU_"><input type="radio" class="Qg8Oo" checked="" value="Afterpay" name="comp-kjjsylbi1">Afterpay</label>
                                        <img src="icons/afterpay.jpg" alt="step1">
                                    </div>
                                    <div class="credit-details">
                                        <p>credit card details</p>
                                    </div>
                                </div>


                                <div class="nextBtn hasPadding">
                                    <a style="margin-right: 5px;" href="" class="prev_action">
                                        <button class="btn2">
                                            BACK
                                        </button>
                                    </a>

                                    <a href="./asset/web-form/thnaks.html" class="btn_checkout">
                                        <button class="button">
                                            Checkout
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col2">

                    <div class="orderSummary">
                        <div class="orderContainer">
                            <div class="orderTop">
                                <p class="bolds cart">
                                    <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="28.5 37.5 142.999 125"
                                         viewBox="28.5 37.5 142.999 125" height="200" width="200"
                                         xmlns="http://www.w3.org/2000/svg" data-type="color" role="img">
                                        <defs>
                                            <style>
                                                #comp-kjh7avte svg [data-color="1"] {
                                                    fill: #3B368C;
                                                }
                                            </style>
                                        </defs>
                                        <g>
                                            <path
                                                    d="M93.331 142.92c-5.392 0-9.78 4.392-9.78 9.79 0 5.399 4.388 9.79 9.78 9.79 5.392 0 9.779-4.392 9.779-9.79 0-5.399-4.387-9.79-9.779-9.79z"
                                                    fill="#2F54DD" data-color="1"></path>
                                            <path
                                                    d="M129.502 142.92c-5.392 0-9.779 4.392-9.779 9.79 0 5.399 4.386 9.79 9.779 9.79 5.392 0 9.78-4.392 9.78-9.79 0-5.399-4.387-9.79-9.78-9.79z"
                                                    fill="#2F54DD" data-color="1"></path>
                                            <path
                                                    d="M63.386 66.861c-.19 0-.377.012-.561.037l-5.34-17.343-28.696-11.967c-.095-.039-.192-.056-.289-.088v9.113l22.092 9.212 23.849 77.455h76.515l20.543-66.42H63.386zm81.355 57.977H80.665L65.414 75.304h94.648l-15.321 49.534z"
                                                    fill="#2F54DD" data-color="1"></path>
                                        </g>
                                    </svg>

                                    Order Summary
                                </p>
                            </div>
                            <div class="orderBody">
                                <div class="s_between">
                                    <div>
                                        <p>
                                            Dropshipping Package
                                        </p>
                                    </div>
                                    <div>
                                        <p class="bold">

                                            AU$149.00
                                            <span class="aus"></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="s_betweens">
                                    <div>
                                        <p>
                                            Marketing Campaign
                                        </p>
                                    </div>
                                    <div>
                                        <p class="bold">

                                            AU$149.00
                                            <span class="auss"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                        </p>

                                    </div>
                                </div>
                                <div class="s_betweens mid">
                                    <div>
                                        <p>
                                            <img src="./asset/web-form/assets/icons/coupn.png" alt="step1" class="enter"> Enter a promo
                                            code
                                        </p>
                                    </div>

                                </div>
                                <div class="orders">


                                    <div class="s_between sub">
                                        <div>
                                            <p>
                                                Subtotal:
                                            </p>
                                        </div>
                                        <div>
                                            <p class="bold">

                                                AU$249.00
                                                <span class="aus"></span>
                                            </p>
                                        </div>
                                    </div>


                                    <div class="s_between sub">
                                        <div>
                                            <p>
                                                Discounts
                                            </p>
                                        </div>
                                        <div>
                                            <p class="bold">

                                                AU$00.00
                                                <span class="aus"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s_between sub">
                                        <div>
                                            <p>
                                                GST:
                                            </p>
                                        </div>
                                        <div>
                                            <p class="bold">

                                                AU$00.00
                                                <span class="aus"></span>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="orderBottom">
                                <div class="s_between">
                                    <div>
                                        <p class="total">
                                            Total:
                                        </p>
                                    </div>
                                    <div>
                                        <p class="bold total">

                                            AU$249.00
                                            <span class="aus"></span>
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <!-- <div class="orderSvg">
                                <svg preserveAspectRatio="none" data-bbox="6.657 92.134 186.694 15.732" xmlns="http://www.w3.org/2000/svg" viewBox="6.415793281653752 91.88025806451613 187.17641343669248 16.239483870967742" data-type="shape" role="img">
                                    <g>
                                        <path d="M6.657 92.134v15.732h4.345a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h3.538a4.72 4.72 0 119.44 0h4.195V92.134H6.657z"></path>
                                    </g>
                                </svg>
                            </div>--->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>



</body>

<script>
    $(document).ready(() => {
        window.show = (id) => {
            if (id == 1) {
                $('#reg_new').removeClass('d-none')
                $('#already_own').addClass('d-none')
            } else {
                $('#reg_new').addClass('d-none')
                $('#already_own').removeClass('d-none')
            }
        }

        window.checked = () => {
            console.log(this)
        }

        show(1)
    })
</script>
<script>
    let steps = Array.from(document.querySelectorAll('.stepsMain .stepActive'));
    document.querySelectorAll('.nextBtn a:not(.btn_checkout)').forEach(actionBtn=>{
        actionBtn.addEventListener('click', (e)=>{
            e.preventDefault();

            let next = 1;
            if(actionBtn.classList.contains('prev_action')){
                next = -1;
            }
            let currntStep = actionBtn.closest('.stepActive');
            let currentIndex = steps.indexOf(currntStep);
            let nextIndex = currentIndex + next;

            if(nextIndex>=0){
                currntStep.classList.remove('active');
                if(!currntStep.classList.contains('passed')){
                    currntStep.classList.add('passed');
                }

                $(currntStep.querySelector('.bodyContainer')).slideUp('slow');
                $(steps[nextIndex].querySelector('.bodyContainer')).slideDown('slow', function () {
                    steps[nextIndex].classList.add('active');
                    setTimeout(function () {
                        steps[nextIndex].scrollIntoView({
                            behavior: 'smooth'
                        });
                    },100)
                });


            }
        })
    })
</script>

<script>
    let checkbox__alreay = document.querySelector('.domain-alreay__checkbox .form-check-input');
    let msg__already = document.querySelector('.domain-alreay__msg');

    checkbox__alreay.addEventListener('click',()=>{
        if(checkbox__alreay.checked){
            msg__already.style.display = 'block';
        }
        else{
            msg__already.style.display = 'none';
        }
    })
</script>

<script>
    let featureInputs = Array.from(document.querySelectorAll('.add-feature td input'));
    let featureBoxs = Array.from(document.querySelectorAll(".add-feature-container .optionalRow"))
    let featureRemoves = Array.from(document.querySelectorAll('.add-feature-container .optionalRow .link-remove'))
    featureInputs.forEach(chk=>{
        chk.addEventListener('click', ()=>{
            let index = featureInputs.indexOf(chk);

            if(chk.checked){
                featureBoxs[index].style.display = 'flex';
            }
            else{
                featureBoxs[index].style.display = 'none'
            }
        })
    })

    featureRemoves.forEach(btn=>{
        btn.addEventListener('click', (e)=>{
            e.preventDefault();
            let index = featureRemoves.indexOf(btn);

            featureBoxs[index].style.display = 'none';
            featureInputs[index].checked = false;
        })
    })
</script>

<script>
    let pagesInputs = Array.from(document.querySelectorAll('.add-pages td input'));
    let pagesBoxs = Array.from(document.querySelectorAll(".add-pages-container .optionalRow"))
    let pagesRemoves = Array.from(document.querySelectorAll('.add-pages-container .optionalRow .link-remove'))

    pagesInputs.forEach(chk=>{
        chk.addEventListener('click', ()=>{
            let index = pagesInputs.indexOf(chk);

            if(chk.checked){
                if(pagesBoxs[index]){
                    pagesBoxs[index].style.display = 'flex';
                }
            }
            else{
                if(pagesBoxs[index]){
                    pagesBoxs[index].style.display = 'none';
                }
            }
        })
    })

    pagesRemoves.forEach(btn=>{
        btn.addEventListener('click', (e)=>{
            e.preventDefault();
            let index = pagesRemoves.indexOf(btn);

            pagesBoxs[index].style.display = 'none';
            pagesInputs[index].checked = false;
        })
    })
</script>

<script>
    function toggledropdown(event) {
        var other_page = event.parentNode.parentNode.getElementsByClassName('other-page-dropdown')[0];
        var user_page = event.parentNode.parentNode.getElementsByClassName('user-form-page-dropdown')[0];
        var faq_page = event.parentNode.parentNode.getElementsByClassName('faq-form-page-dropdown')[0];
        var contact_page = event.parentNode.parentNode.getElementsByClassName('contact-form-page-dropdown')[0];
        var Additional_page = event.parentNode.parentNode.getElementsByClassName('additional-page-dropdown')[0];
        var booking_page = event.parentNode.parentNode.getElementsByClassName('online-booking-dropdown')[0];
        var sell_page = event.parentNode.parentNode.getElementsByClassName('sell-product-dropdown')[0];
        var event_page = event.parentNode.parentNode.getElementsByClassName('event-manager-dropdown')[0];
        if (event.value === "hide") {
            other_page.classList.remove("dropdown-content-show");
            user_page.classList.remove("dropdown-content-show");
            faq_page.classList.remove("dropdown-content-show");
            contact_page.classList.remove("dropdown-content-show");
            Additional_page.classList.remove("dropdown-content-show");
            booking_page.classList.remove("dropdown-content-show");
            sell_page.classList.remove("dropdown-content-show");
            event_page.classList.remove("dropdown-content-show");
        }
         else if (event.value === "User Form Page") {
            other_page.classList.remove("dropdown-content-show");
            user_page.classList.add("dropdown-content-show");
            faq_page.classList.remove("dropdown-content-show");
            contact_page.classList.remove("dropdown-content-show");
            Additional_page.classList.remove("dropdown-content-show");
            booking_page.classList.remove("dropdown-content-show");
            sell_page.classList.remove("dropdown-content-show");
            event_page.classList.remove("dropdown-content-show");
        }
        else if(event.value === "FAQ Page"){
            other_page.classList.remove("dropdown-content-show");
            user_page.classList.remove("dropdown-content-show");
            faq_page.classList.add("dropdown-content-show");
            contact_page.classList.remove("dropdown-content-show");
            Additional_page.classList.remove("dropdown-content-show");
            booking_page.classList.remove("dropdown-content-show");
            sell_page.classList.remove("dropdown-content-show");
            event_page.classList.remove("dropdown-content-show");
        }
        else if(event.value === "Contact us page"){
            other_page.classList.remove("dropdown-content-show");
            user_page.classList.remove("dropdown-content-show");
            faq_page.classList.remove("dropdown-content-show");
            contact_page.classList.add("dropdown-content-show");
            Additional_page.classList.remove("dropdown-content-show");
            booking_page.classList.remove("dropdown-content-show");
            sell_page.classList.remove("dropdown-content-show");
            event_page.classList.remove("dropdown-content-show");
        }
        else if(event.value === "Additional Page - $99.00"){
            other_page.classList.remove("dropdown-content-show");
            user_page.classList.remove("dropdown-content-show");
            faq_page.classList.remove("dropdown-content-show");
            contact_page.classList.remove("dropdown-content-show");
            Additional_page.classList.add("dropdown-content-show");
            booking_page.classList.remove("dropdown-content-show");
            sell_page.classList.remove("dropdown-content-show");
            event_page.classList.remove("dropdown-content-show");
        }
        else if(event.value === "Online Bookings - $99.00"){
            other_page.classList.remove("dropdown-content-show");
            user_page.classList.remove("dropdown-content-show");
            faq_page.classList.remove("dropdown-content-show");
            contact_page.classList.remove("dropdown-content-show");
            Additional_page.classList.remove("dropdown-content-show");
            booking_page.classList.add("dropdown-content-show");
            sell_page.classList.remove("dropdown-content-show");
            event_page.classList.remove("dropdown-content-show");
        }
        else if(event.value === "Sell Products or Services - $99.00"){
            other_page.classList.remove("dropdown-content-show");
            user_page.classList.remove("dropdown-content-show");
            faq_page.classList.remove("dropdown-content-show");
            contact_page.classList.remove("dropdown-content-show");
            Additional_page.classList.remove("dropdown-content-show");
            booking_page.classList.remove("dropdown-content-show");
            sell_page.classList.add("dropdown-content-show");
            event_page.classList.remove("dropdown-content-show");
        }
        else if(event.value === "Event Manager - $99.00"){
            other_page.classList.remove("dropdown-content-show");
            user_page.classList.remove("dropdown-content-show");
            faq_page.classList.remove("dropdown-content-show");
            contact_page.classList.remove("dropdown-content-show");
            Additional_page.classList.remove("dropdown-content-show");
            booking_page.classList.remove("dropdown-content-show");
            sell_page.classList.remove("dropdown-content-show");
            event_page.classList.add("dropdown-content-show");
        }else{
            other_page.classList.add("dropdown-content-show");
            user_page.classList.remove("dropdown-content-show");
            faq_page.classList.remove("dropdown-content-show");
            contact_page.classList.remove("dropdown-content-show");
            Additional_page.classList.remove("dropdown-content-show");
            booking_page.classList.remove("dropdown-content-show");
            sell_page.classList.remove("dropdown-content-show");
            event_page.classList.remove("dropdown-content-show");
        }
    }
</script>

</html>
