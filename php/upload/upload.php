<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Upload Poster</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css" />
  </head>
  <body>
    <div class="container">
        <div class="page-header">
          <h1>Upload Poster <small>Share with the world.</small></h1>
        </div>
        
        <p><span style="color: red;">*</span> denotes field is required.</p>
        <form class="form-horizontal">
          
          <div class="alert" style="display: none" role="alert">
            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Holy guacamole! Best check yo self, you're looking too good.</strong> 
            <h3></h3>
          </div>
          
          <div class="form-group">
            <label for="posterImage" class="col-sm-2 control-label">Poster File <span style="color: red;">*</span></label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="posterImage" name="posterImage" accept="image/*" required>
            </div>
          </div>
          <div class="form-group">
            <label for="eventName" class="col-sm-2 control-label">Event Name <span style="color: red;">*</span></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="eventName" name="eventName" placeholder="e.g. Woodstock Music Festival, Cosmic Club Party" required>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="eventDescription">Event Description <span style="color: red;">*</span></label>
            <div class="col-sm-10">
                 <input type="text" class="form-control" id="eventDescription" name="eventDescription" placeholder="Please be as deatiled as possible" required>
            </div>
            
          </div>
          <div class="form-group">
            <label for="datepicker" class="col-sm-2 control-label">When <span style="color: red;">*</span></label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="datepicker" name="datepicker" required>
            </div>
          </div>
          
          <div class="form-group">
            <label for="time" class="col-sm-2 control-label">Time <span style="color: red;">*</span></label>
            <div class="col-sm-10">
              <input type="time" class="form-control" id="time" name="time" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Ka-Ching</button>
            </div>
          </div>
        </form>
        <div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar"  style="width: 0%">
                <span >0</span>% Complete
              </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript">
        (function($){
            $(function(){
              
                
                
                var $inputs = $('input');
                //($inputs).css('background-color', 'red');
                //$inputs.css({backgroundColor: '#FFAAAA'});
                
                /*
                $('.btn-success').on('click', function(e){
                  var self = this;
                    //$(this).css({display:'none'});
                    $(self).prop('disabled', true).html('Processing...');
                    
                    
                    
                    var percent = 0;
                    var interval = setInterval(function(){
                         percent += 24;
                         $('.progress-bar').css('width', percent + '%');
                         $('.progress-bar span').text(percent);
                         if(percent >= 100) {
                            clearInterval(interval);
                            
                            
                            if( !$('#txtAmount').val() ) {
                                $inputs.css({backgroundColor: '#FFAAAA'});
                                $(self).prop('disabled', false).html('Try Again');
                                $('.alert').addClass('alert-danger').show().find('h3').html('yous a didnt it.  AHHHHHHHHHHHHHHHHHHHHHHH');
                                
                                toastr.error('AHHHHHHHHHHHHHHHHHHHHHHH');
                                console.log(self);
                            }
                            else {
                              //do something
                              //display success and submit
                              $('.alert').addClass('alert-success').show().find('h3').html('yous a dit it');
                               toastr.success('AHHHHHHHHHHHHHHHHHHHHHHH');
                               
                               console.log(self);
                               console.warn('warn');
                               console.assert('assert');
                               console.info('ibnfo');
                               console.trace('trace');
                            }
                            
                            console.error('we are never never never being reached');
                         }
                    }, 200);
                    return false;
                });*/
                
                $('.close').on('click', function(e) {
                  //$('.alert').fadeOut(3000); 
                  $(this).closest('.alert').slideUp();
                });
                
                
                $('input[type="number.spinner"]').spinner();
                $('#datepicker').datepicker();
            });
        })(jQuery);
    </script>
  </body>
</html>