@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        
        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                        </ol>
                
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <img src="/storage/Madeira.jpg" alt="Μαδέρα στην Πορτογαλία" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Μαδέρα, Πορτογαλία</h3>
                                </div>
                            </div>
                
                            <div class="item">
                                <img src="/storage/Francis Beidler Forest.jpg" alt="Δάσος στην Ν.Καρολίνα" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Francis Beidler Forest στην Ν.Καρολίνα, ΗΠΑ</h3>
                                </div>
                            </div>
                
                            <div class="item">
                                <img src="/storage/crete-agios-nikolaos.jpg" alt="Άγιος Νικόλαος στην Κρήτη" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Άγιος Νικόλαος, Κρήτη</h3>
                                </div>
                            </div>
                    
                            <div class="item">
                                <img src="/storage/mountain.jpg" alt="Πεζοπορία στο βουνό" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Πεζοπορία στο βουνό</h3>
                                </div>
                            </div>

                            <div class="item">
                                <img src="/storage/nightlife-budapest.jpg" alt="Νυχτερινή Βουδαπέστη" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Νυχτερινή Βουδαπέστη με ποδήλατο</h3>
                                </div>
                            </div>

                            <div class="item">
                                <img src="/storage/australia.jpg" alt="Σκι στην Βικτώρια" style="width:100%;">
                                <div class="carousel-caption">
                                    <h3>Σκι στην Βικτώρια, Αυστραλία</h3>
                                </div>
                            </div>
                    
                        </div>
                
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
        
                    <br><br>

                    <h3>ΤΑΞΙΔΕΨΕ | ΑΝΑΚΑΛΥΨΕ | ΖΗΣΕ</h3>
                    <p style="font-size:1.8rem; text-align:left;">Η φύση μάς καλεί να την ανακαλύψουμε όλες τις εποχές του χρόνου. Ένα μωσαϊκό τοπίων 
                    με μοναδική βιοποικιλότητα και οικολογική αξία ξεδιπλώνεται μπροστά μας: σε εθνικά πάρκα, 
                    ποτάμια, καταρράκτες, λίμνες, υδροβιότοπους, οροσειρές και ηφαίστεια. Θα ανακαλύψετε πόσα πολλά 
                    μπορεί να κρύβονται στον μικρό πλανήτη μας.<br>Παράλληλα στο ανέγγιχτο από τον άνθρωπο φυσικό 
                    περιβάλλον προσφέρονται δραστηριότητες, όπως περπάτημα, ιππασία, οδήγηση off road, ράφτινγκ, 
                    καγιάκ, αναρρίχηση, ορειβασία ή canyoning.</p>

                    <br><br>

                    <p style="text-align:left;">
                        <a href="#"><img src="/storage/facebook-likes.jpg" alt="Terra Mare" style="width:60%;"></a>
                    </p>

                </div>

                <div class="col-sm-3">
                        <a href="https://terramare.com.gr/" target="_blank">
                            <img src="/storage/TerraMare.png" alt="Terra Mare" style="width:70%;">
                        </a>
                        <p style="font-size:1.4rem; font-weight: bold;">Είδη camping, είδη ορειβασίας, σκηνές, outdoor.</p>
                        <p style="font-size:1.5rem; text-align:left; padding:10px;">"Το TERRAMARE είναι εδώ για σας. Σε μας θα βρείτε μια καλά ενημερωμένη ποικιλία 
                            προϊόντων της αγαπημένης σας δραστηριότητας, για να απολαύσετε τις εξορμήσεις σας. 
                            Χτενίζουμε εξαντλητικά την παγκόσμια αγορά και επιλέγουμε για σας τα καλύτερα 
                            προϊόντα,που ταιριάζουν στα Ελληνικά μικρο-κλίματα και στις δικές σας ανάγκες. 
                            Εσείς απολαμβάνετε την αγαπημένη σας δραστηριότητα, χωρίς να αγωνιάτε για τον 
                            εξοπλισμό σας. Ξέρουμε τα προϊόντα που πουλάμε και την χρήση που προορίζονται γιατί είμαστε 
                            σαν και σας."
                        </p>
                        <p style="font-size:1.3rem; font-weight:normal; color:black; text-align:left; padding-left:10px;">Αιγάλεω<br>Ιερά Οδός 263<br>Τηλ: 210 5987213<br>Email: info@terramare.com.gr
                        </p>
                </div>

            </div><!-- end of row -->

        </div><!-- end of container -->

    </div>
@endsection