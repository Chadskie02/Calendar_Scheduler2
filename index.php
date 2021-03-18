<?php include('db.php'); ?>
<?php include('header.php'); ?>
<body>
<style>
.addcolor1{
  background-color: white !important;
  color: #555 !important;
  border: 1px solid #ccc !important;
}
.addcolor{
  background: linear-gradient(-30deg,#161d6f 50%,#0a1540 50%);
  /* background-color: #161d6f; */
  color: white;
  border: none;
  box-shadow:  0 7px 6px rgba(0,0,0,.5);
}
.thisday{
  background: linear-gradient(-30deg,#161d6f 50%,#0a1540 50%) !important; 
  /* background-color: #161d6f; */
  color: white !important;
  border:none !important;
  box-shadow:  0 7px 6px rgba(0,0,0,.5) !important;
}
</style>
  <!-- start of my code -->
<div id="div-to-refresh">  
    <div class="container">
        <div class="col-lg-12">     
            <div class="row">
                <form name = "form1" action="" method="post" enctype="multipart/form-data">
                            <!-- Navigation -->
                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"></a>
                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a><?php echo $today; ?></a></li>
                                    <li>
                                    <?php
                                        $sql = "SELECT id, user FROM test_info";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                        ?>
                                        <a>
                                        <label><?php echo $row["id"]; ?></label>
                                        <!-- <input type="hidden" name="id" required value="<?php // echo $row["id"]; ?>" /> -->

                                        <label><?php echo $row["user"]; ?></label>
                                        <span class="glyphicon glyphicon-user"></span>
                                        <input type="hidden" name="user" required value="<?php echo $row["user"]; ?>" id="user" />
                                        </a>
                                        <?php 
                                        }
                                        } else {
                                        echo "0 results";
                                        }
                                        ?>    
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
      
                    <div class="col-lg-12 mtop">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                    <h1>                                        
                                        <a class="Acolor" href="?ym=<?php echo $prev; ?>"><i class="fa fa-fw" aria-hidden="true" title="Copy to use angle-left"></i></a>
                                        <a class="Acolor"><?php echo $month; ?> <?php echo $year; ?></a> 
                                        <a class="Acolor" href="?ym=<?php echo $next; ?>"><i class="fa fa-fw" aria-hidden="true" title="Copy to use angle-right"></i></a>                   
                                        <input type="hidden" name="year" required value="<?php echo $year; ?>" id="year" />
                                        <input type="hidden" name="month" required value="<?php echo $month; ?>" id="month" />  
                                        <button type="submit" name="submit" id="submit" class="btn btn-outline btn-default" style="visibility: hidden;"><i class="fa fa-fw" aria-hidden="true" title="Copy to use calendar-plus-o"></i>Submit</button>
                                    </h1> 
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="row seven-cols bordered">
                                                
                                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs bordered">
                                                <p class="help-block center">Sunday</p>
                                            </div>
                                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs bordered">
                                                <p class="help-block center">Tuesday</p>
                                            </div>
                                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs bordered">
                                                <p class="help-block center">Wednesday</p>
                                            </div>
                                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs bordered">
                                                <p class="help-block center">Thursday</p>
                                            </div>
                                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs bordered">
                                                <p class="help-block center">Friday</p>
                                            </div>
                                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs bordered">
                                                <p class="help-block center">Saturday</p>
                                            </div>
                                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs bordered">
                                                <p class="help-block center">Monday</p>
                                            </div>

                                            <div class="hidden-lg hidden-md col-sm-1 col-xs-1">
                                                <p class="help-block center">S</p>
                                            </div>
                                            <div class="hidden-lg hidden-md col-sm-1 col-xs-1">
                                                <p class="help-block center">M</p>
                                            </div>
                                            <div class="hidden-lg hidden-md col-sm-1 col-xs-1">
                                                <p class="help-block center">T</p>
                                            </div>
                                            <div class="hidden-lg hidden-md col-sm-1 col-xs-1">
                                                <p class="help-block center">W</p>
                                            </div>
                                            <div class="hidden-lg hidden-md col-sm-1 col-xs-1">
                                                <p class="help-block center">T</p>
                                            </div>
                                            <div class="hidden-lg hidden-md col-sm-1 col-xs-1">
                                                <p class="help-block center">F</p>
                                            </div>
                                            <div class="hidden-lg hidden-md col-sm-1 col-xs-1">
                                                <p class="help-block center">S</p>
                                            </div>  
                                                                        
                                        </div>
                                    </div>
                                            <?php
                                                foreach ($weeks as $week) {
                                                    echo $week;     
                                                }
                                            ?>    
                                    </div>                     
                                </div>
                            </div>
                        </div>                                         
                    </div> 
                </form> 
            </div>      
        </div>      
    </div> 
</div>        
<script>
$("textarea").change(function(){   
        var id = [];
    	var day = [];
        var text = [];
        var year = $("#year").val();
        var month = $("#month").val();
        var user = $("#user").val();
		/* ARRAY */
        $("input[name='day']:checked").each(function(){
            day.push(this.value);
        });
        $('input[name^=id]').each(function(){
            id.push(this.value);
        }); 
        $('textarea[name^=text]').each(function(){
            text.push(this.value);
        });        
    $.ajax({
         data:  {
             id:id,
             user:user,
             year:year,
             month:month,
			 day:day,
             text:text
		 },
         type: "post",
         url: "save.php",
         success: function(data){

             if(day.length === 0){
                alert('empty');
             } else{
                // alert(data);
                data;
             }   
         }
	});

if ( $( this ).is( '#text1' ) ) {
    $('#text1').addClass('addcolor');

    $('#text1').blur(function() 
    {
        if( $(this).val().length === 0 ) {
                $('#text1').removeClass('addcolor');
                $('#text1').removeClass('thisday');
        }
    });
} else if ( $( this ).is( '#text2' ) ) {
    $('#text2').addClass('addcolor');

    $('#text2').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text2').removeClass('addcolor');
            $('#text2').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text3' ) ) {
    $('#text3').addClass('addcolor');

    $('#text3').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text3').removeClass('addcolor');
            $('#text3').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text4' ) ) {
    $('#text4').addClass('addcolor');

    $('#text4').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text4').removeClass('addcolor');
            $('#text4').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text5' ) ) {
    $('#text5').addClass('addcolor');

    $('#text5').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text5').removeClass('addcolor');
            $('#text5').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text6' ) ) {
    $('#text6').addClass('addcolor');

    $('#text6').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text6').removeClass('addcolor');
            $('#text6').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text7' ) ) {
    $('#text7').addClass('addcolor');

    $('#text7').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text7').removeClass('addcolor');
            $('#text7').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text8' ) ) {
    $('#text8').addClass('addcolor');

    $('#text8').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text8').removeClass('addcolor');
            $('#text8').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text9' ) ) {
    $('#text9').addClass('addcolor');

    $('#text9').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text9').removeClass('addcolor');
            $('#text9').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text10' ) ) {
    $('#text10').addClass('addcolor');

    $('#text10').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text10').removeClass('addcolor');
            $('#text10').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text11' ) ) {
    $('#text11').addClass('addcolor');

    $('#text11').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text11').removeClass('addcolor');
            $('#text11').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text12' ) ) {
    $('#text12').addClass('addcolor');

    $('#text12').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text12').removeClass('addcolor');
            $('#text12').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text13' ) ) {
    $('#text13').addClass('addcolor');

    $('#text13').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text13').removeClass('addcolor');
            $('#text13').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text14' ) ) {
    $('#text14').addClass('addcolor');

    $('#text14').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text14').removeClass('addcolor');
            $('#text14').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text15' ) ) {
    $('#text15').addClass('addcolor');

    $('#text15').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text15').removeClass('addcolor');
            $('#text15').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text16' ) ) {
    $('#text16').addClass('addcolor');

    $('#text16').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text16').removeClass('addcolor');
            $('#text16').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text17' ) ) {
    $('#text17').addClass('addcolor');

    $('#text17').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text17').removeClass('addcolor');
            $('#text17').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text18' ) ) {
    $('#text18').addClass('addcolor');

    $('#text18').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text18').removeClass('addcolor');
            $('#text18').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text19' ) ) {
    $('#text19').addClass('addcolor');

    $('#text19').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text19').removeClass('addcolor');
            $('#text19').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text20' ) ) {
    $('#text20').addClass('addcolor');

    $('#text20').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text20').removeClass('addcolor');
            $('#text20').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text21' ) ) {
    $('#text21').addClass('addcolor');

    $('#text21').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text21').removeClass('addcolor');
            $('#text21').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text22' ) ) {
    $('#text22').addClass('addcolor');

    $('#text22').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text22').removeClass('addcolor');
            $('#text22').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text23' ) ) {
    $('#text23').addClass('addcolor');

    $('#text23').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text23').removeClass('addcolor');
            $('#text23').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text24' ) ) {
    $('#text24').addClass('addcolor');

    $('#text24').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text24').removeClass('addcolor');
            $('#text24').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text25' ) ) {
    $('#text25').addClass('addcolor');

    $('#text25').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text25').removeClass('addcolor');
            $('#text25').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text26' ) ) {
    $('#text26').addClass('addcolor');

    $('#text26').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text26').removeClass('addcolor');
            $('#text26').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text27' ) ) {
    $('#text27').addClass('addcolor');

    $('#text27').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text27').removeClass('addcolor');
            $('#text27').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text28' ) ) {
    $('#text28').addClass('addcolor');

    $('#text28').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text28').removeClass('addcolor');
            $('#text28').removeClass('thisday');
        }
    });

} else if ( $( this ).is( '#text29' ) ) {
    $('#text29').addClass('addcolor');

    $('#text29').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text29').removeClass('addcolor');
            $('#text29').removeClass('thisday');
        }
    });

}  else if ( $( this ).is( '#text30' ) ) {
    $('#text30').addClass('addcolor');

    $('#text30').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text30').removeClass('addcolor');
            $('#text30').removeClass('thisday');
        }
    });

}else {
    $('#text31').addClass('addcolor');

    $('#text31').blur(function() 
    {
        if( $(this).val().length === 0 ) {
            $('#text31').removeClass('addcolor');
            $('#text31').removeClass('thisday');
        }
    });

}
     
});

</script>   
</body>    
<?php include('footer.php'); ?>   