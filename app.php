<div class="about">
    <p class="left">
        # Task 1 <br><br>
        <h2><b>Calculator Windows Version</b></h2>
    </p>   
    <p>
        Completed for 4 days at 27 May 2020
    </p>
    <br><br><br><br><br><hr>
    <?php require 'src/components/atoms/signature.php' ;?>
</div>
<div class="wrapper">
    <div class="title">
        <p>Calculator Windows</p>
    </div>
    <div style="position:relative">
        <span href="javascript:void(0)" id="thisCloseHistory" class="closeHistory" onclick="closeHistory()"></span>
        <?php require 'src/components/molecules/header.php' ;?>
        <?php require 'src/components/molecules/display.php' ;?>
        <?php require 'src/components/molecules/control.php' ;?>
    </div>
</div>