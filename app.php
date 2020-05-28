<div class="about">
    <p class="left">
        # Task 1 <br><br>
        <h2 style="padding-bottom: 15px;"><b>Calculator Windows Version</b></h2>
    </p>   
    <p>
        Estimated complete for 5 days at 28 May 2020
        <br><br>
        #EigerTime #BoringTimeChallenge
    </p>
    <br><br><br><br><br><hr>
    <?php require 'src/components/atoms/signature.php' ;?>
</div>
<div class="wrapper">
    <div class="title">
        <p>Calculator Windows</p>
    </div>
    <div style="position:relative">
        <div href="javascript:void(0)" id="thisBlankCloseSideBar" class="blankCloseSideBar" onclick="closeNav()">as</div>
        <div href="javascript:void(0)" id="thisCloseHistory" class="closeHistory" onclick="closeHistory()"></div>
        <?php require 'src/components/molecules/header.php' ;?>
        <?php require 'src/components/molecules/display.php' ;?>
        <?php require 'src/components/molecules/control.php' ;?>
    </div>
</div>