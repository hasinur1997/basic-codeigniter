<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>A Test Project</title>
     

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/owl.theme.default.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="main-wrapper">
        <div class="container">
           <div class="main-wraper-bg">
            <div class="header-area-img" style="background: url(<?php echo base_url('assets/img/headerdemo.jpg')?>); height:200px; background-size: 100% 200px">
                <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <a href="" class="">
                            <img src="<?php echo base_url('assets/img/logo.jpg')?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="header-title">
                        <h2>A Test Project</h2>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="header-title-two">
                        <h3> </h3>
                        <p> <br>
                             <br>
                              <br>
                            </p>
                    </div>
                </div>
            </div>
            </div>
    <div class="main-content">
            <div class="row">
                <div class="col-md-8">
                    <div class="left_sidebar">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>নিয়মাবলী </h4>
                            </div>
                            <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">01. Architectural Design</li>
                                <li class="list-group-item">02. Teacher, student, researcher and user is an actor.</li>
                                <li class="list-group-item">03. These attributes includes some sub-attributes.</li>
                                <li class="list-group-item">04. And the attributes are associated with actors.</li>
                                <li class="list-group-item">05. Particular actors are associated with particular attributes.</li>
                                <li class="list-group-item">06. Admin is associated with all the attributes.</li>
                                <li class="list-group-item">07. That is why he get all the features of this application.</li>
                                <li class="list-group-item">08. Architectural Design</li>
                                <li class="list-group-item">09. Teacher, student, researcher and user is an actor.</li>
                                <li class="list-group-item">10. These attributes includes some sub-attributes.</li>
                                <li class="list-group-item">11. And the attributes are associated with actors.</li>
                                <li class="list-group-item">12. Particular actors are associated with particular attributes.</li>
                                <li class="list-group-item">13. Admin is associated with all the attributes.</li>
                                <li class="list-group-item">14. That is why he get all the features of this application.</li>
                                
                              </ul>
                              </div>

                            

                        </div>
                    </div>

                    <!-- CRUD Here -->


                    <div class="crude"> 
                            
                        <?php if($this->session->flashdata('message')):?>
                            <div class="alert alert-info">
                                <p><?php echo $this->session->flashdata('message')?></p>
                            </div>
                        <?php endif?>
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               CodeIgniter CRUD
                           </div>
                           <div class="panel-body"> 
                                <form action="<?php echo base_url('User/update?id='.$edit->id)?>" method="post"> 
                                    <div class="form-group<?php echo form_error('name') ? ' has-error' : ''?>">
                                        <label for="name" class="control-label">
                                            Name
                                        </label>
                                         <input type="text" id="name" name="name" value="<?php echo $edit->name;?>" class="form-control">


                                         <?php if(form_error('name')):?>
    
                                            <b class="help-block"><?php echo form_error('name')?></b>

                                        <?php endif?>
                                    </div>

                                    <div class="form-group<?php echo form_error('email') ? ' has-error' : ''?>">
                                        <label for="email" class="control-label">
                                            Email
                                        </label>
                                         <input type="text" id="email" name="email" value="<?php echo $edit->email?>" class="form-control">

                                         <?php if(form_error('email')):?>
    
                                            <b class="help-block"><?php echo form_error('email')?></b>

                                        <?php endif?>
                                    </div>

                                    <div class="form-group<?php echo form_error('phone') ? ' has-error' : ''?>">
                                        <label for="phone" class="control-label">
                                            Phone
                                        </label>
                                         <input type="text" id="phone" name="phone" value="<?php echo $edit->phone?>" class="form-control">

                                         <?php if(form_error('phone')):?>
    
                                            <b class="help-block"><?php echo form_error('phone')?></b>

                                        <?php endif?>
                                    </div>

                                    <div class="form-group"> 
                                        <button class="btn btn-default">Submit</button>
                                    </div>
                                </form>
                           </div>
                       </div>
         
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="right-panel">
                        <div class="loginarea">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>লগ ইন</h4>
                                </div>
                                <div class="panel-body">
                                    <form action="admin/index.html">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                      </div>
                                      <button type="submit" class="btn btn-default custom">লগ ইন</button>
                                    </form>
                                    <a href="" class="cng">Forget Password?</a> <br>
                                    <a href="registration.html">Don't Have An Account? Create An Account</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-two">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>ABSTRACT</h4>
                                </div>
                                <div class="panel-body">
                                    <p>The main purpose of the “Online Learning and Exam System” is to make a better solution for

academic Students and Education Board. This application is very essential for an academic

Students and Education Board. Education Board handle the examinations and student results and

for academic Students to handle their online learning and gain online academic certificates.</p>
                                    
                                    <p>certificates. It is

also very useful for any students to test himself continuously for their Analytical development in

Science field and for Education Board to make progress in their digitalization work by getting

online analytical exam from the PEC, JSC, SSC, HSC Examinee.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        

        <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <img src="<?php echo base_url('assets/img/img1.png')?>" alt="">
                        <h4>SSC PRE TEST</h4>
                        <p>Feel Free to attain the exam and test your potentiality 
                        </p>
                        <a href="">More</a>
                      </div>
                    </div>
                </div>
                <div class="item">
                    <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="<?php echo base_url('assets/img/img1.png')?>" alt="">
                        <h4>JSC PRE TEST</h4>
                        <p>Feel Free to attain the exam and test your potentiality /p>
                        <a href="">More</a>
                      </div>
                    </div>
                </div>
                <div class="item">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <img src="<?php echo base_url('assets/img/img1.png')?>" alt="">
                        <h4>MBA PRE TEST </h4>
                        <p>Feel Free to attain the exam and test your potentiality </p>
                        <a href="">More</a>
                      </div>
                    </div>
                </div>
                <div class="item">
                   <div class="panel panel-default">
                  <div class="panel-body">
                        <img src="<?php echo base_url('assets/img/img1.png')?>" alt="">
                        <h4>HSC PRE TEST</h4>
                        <p>Feel Free to attain the exam and test your potentiality </p>
                        <a href="">More</a>
                      </div>
                </div>
                </div>
                <div class="item">
                   <div class="panel panel-default">
                      <div class="panel-body">
                        <img src="<?php echo base_url('assets/img/img1.png')?>" alt="">
                        <h4>Third Term Final PRE TEST</h4>
                        <p>Feel Free to attain the exam and test your potentiality </p>
                       <a href="">More</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="footer-area">
                <div class="row">
                    <div class="col-md-6">
                        Copyright &copy; 2017
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            Design & Developed FOR RTSOFT <a href=""></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/active.js')?>"></script>
  </body>
</html>