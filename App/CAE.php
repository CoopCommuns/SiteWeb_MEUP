<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'Composants/lien.php';?>

    <title>Document</title>
</head>
<body>
     <?php include 'Composants/Header.php';?>
     
        <section>
            <div class="container mb-5">
                <div class="card-group vgr-cards newsletter-text" >
                    <div class="card">
                      
                        <div class="card-body ">
                            <h4 class="card-title newsletter-title">Coopératives d'activités et d'emploi</h4>
                            <p class="card-text ">Les coopératives d'activités et d'emploi (CAE) constituent 
                                un concept original permettant à un porteur de projet de tester son activité 
                                en toute sécurité. L'originalité de la CAE est de lui offrir un statut "d'entrepreneur salarié" qui lui permet de 
                                percevoir un salaire et de bénéficier de la couverture sociale d'un salarié 
                                classique.
                            </p>
                            
                        </div>
                    </div>

                    <div class="section-title">
                           <h2 >Contact</h2>
                        </div>

                    <div class="col-lg-12 d-flex justify-content-center align-items-center" id="contact">
                        <form action="#" method="#" role="form" class="php-email-form">
                            <div class="row">
                              <div class="col-md-6 form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="ton nom" required>
                              </div>
                              <div class="col-md-6 form-group mt-3 mt-md-0">
                              <input type="email" class="form-control" name="email" id="email" placeholder="ton Email" required>
                              </div>
                            </div>

                            <div class="form-group mt-3">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                            </div>

                            <div class="form-group mt-3">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            
                            <div class="text-center"><button type="submit" onclick=window.location.href="mailto:assomeup@gmail.com">Send Message</button></div>
                        
                        </form>
			        </div>
	  
                </div>
            </div>
        </section>
      <?php include 'Composants/Footer.php';?>
</body>
</html>