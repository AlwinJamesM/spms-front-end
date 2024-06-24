<?php $title = 'contact-Us'; ?>
<?php include 'header.php' ?>

<title>Contact-Us</title>	

<!-- body --->
<div role="main" class="main">

    <section class="custom-page-header-1 page-header page-header-modern page-header-lg border-0 z-index-1 my-0" style="background-image: url(img/gradient-bg.jpeg); background-size: cover; background-position: center;">
        <div class="custom-page-header-1-wrapper overflow-hidden">
            <div class="custom-bg-grey-1 py-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">
                <div container py-3 my-3">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static text-center">
                            <div class="overflow-hidden mb-2">
                                <h1 class="font-weight-black text-12 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">Contact Us</h1>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center">
                            <div class="overflow-hidden">
                                <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                    <li class="text-transform-none"><a href="myray.php" class="text-decoration-none">Home</a></li>
                                    <li class="text-transform-none active">Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div role="main" class="main">

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map mt-0" style="height: 500px;"></div>

        <div class="container">

            <div class="row py-4">
                <div class="col-lg-6">

                    <h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
                    <p class="mb-4">Feel free to ask for details, don't save any questions!</p>

                    <form class="contact-form" action="php/contact-form.php" method="POST">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Full Name</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Email Address</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Message</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6">

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                        <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> 3/F East Wing St. Patrick's Square Bldg., #566 Shaw Boulevard, Mandaluyong City</li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (02) 8533 8814 to 17 / (02) 8637 9694 / (02) 8636 4819 / (02) 855 65961</li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="spmsphilippines@gmail.com">spmsphilippines@gmail.com</a></li>
                        </ul>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                        <h4 class="pt-5">Business <strong>Hours</strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> Monday - Friday - 8am to 5pm</li>
                            <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                            <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                        </ul>
                    </div>

                    <h4 class="pt-5">Get in <strong>Touch</strong></h4>
                    <p class="lead mb-0 text-4">St. Patrick's Medical Systems Inc. (SPMS) - Dental Supplies</p>

                </div>

            </div>

        </div>

    </div>

    <script>
        /* 
Map Markers:
- Get an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key
- Generate Map Id: https://console.cloud.google.com/google/maps-apis/studio/maps
- Use https://www.latlong.net/convert-address-to-lat-long.html to get Latitude and Longitude of a specific address
*/
        (g => {
            var h, a, k, p = "The Google Maps JavaScript API",
                c = "google",
                l = "importLibrary",
                q = "__ib__",
                m = document,
                b = window;
            b = b[c] || (b[c] = {});
            var d = b.maps || (b.maps = {}),
                r = new Set,
                e = new URLSearchParams,
                u = () => h || (h = new Promise(async (f, n) => {
                    await (a = m.createElement("script"));
                    e.set("libraries", [...r] + "");
                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                    e.set("callback", c + ".maps." + q);
                    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                    d[q] = f;
                    a.onerror = () => h = n(Error(p + " could not load."));
                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                    m.head.append(a)
                }));
            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
        })
        ({
            key: "AIzaSyC7NX0UKCgd1JT3_zV4hNS8RoEr1iXNW98",
            v: "weekly"
        });

        async function initMap() {
            const {
                Map,
                InfoWindow
            } = await google.maps.importLibrary("maps");
            const {
                AdvancedMarkerElement,
                PinElement
            } = await google.maps.importLibrary(
                "marker",
            );
            const map = new Map(document.getElementById("googlemaps"), {
                zoom: 14,
                center: {
                    lat: 14.589590,
                    lng: 121.039960
                },
                mapId: "f361d32efbce7352",
            });
            const markers = [{
                position: {
                    lat: -14.589590,
                    lng: -121.039960
                },
                title: "Office 1<br>Mandaluyong, 566 Shaw Boulevard, Philippines<br>Phone: (02) 8533 8814 to 17",
            }];

            const infoWindow = new InfoWindow();

            markers.forEach(({
                position,
                title
            }, i) => {
                const pin = new PinElement({    
                    background: "#e36159",
                    borderColor: "#e36159",
                    glyphColor: "#FFF",
                });
                const marker = new AdvancedMarkerElement({
                    position,
                    map,
                    title: `${title}`,
                    content: pin.element,
                });

                marker.addListener("click", ({
                    domEvent,
                    latLng
                }) => {
                    const {
                        target
                    } = domEvent;

                    infoWindow.close();
                    infoWindow.setContent(marker.title);
                    infoWindow.open(marker.map, marker);
                });
            });

        }
  
        initMap();
    </script>

    <!-- end body --->

    <?php include 'footer.php' ?>