<div class="header">
    <div class="sideNav">
        <div id="sideBarNav" class="sideBar">
            <div class="headerCloseBtn stickyTop">
                <a href="javascript:void(0)" class="closeBtn button" onclick="closeNav()">&times;</a>
            </div>
            <div class="menu">
                <h4>Calculator</h4>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 1 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-calculator"></i></span>
                    Standard
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-flask"></i></span>    
                    Scientific
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-code"></i></span>    
                    Programmer
                </a>
                <a href="#link">
                        <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                    Date Calculation
                </a>
                <h4>Converter</h4>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-coins"></i></span>    
                    Currency
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-cube"></i></span>    
                    Volume
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-ruler"></i></span>    
                    Length
                </a>
                <a href="#link">
                        <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-weight-hanging"></i></span>
                    Weight and Mass
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-thermometer-quarter"></i></span>    
                    Temperature
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-burn"></i></span>    
                    Energy
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-solar-panel"></i></span>    
                    Area
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-running"></i></span>    
                    Speed
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-clock"></i></span>    
                    Time
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-bolt"></i></span>    
                    Power
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-database"></i></span>    
                    Data
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-tachometer-alt"></i></span>    
                    Pressure
                </a>
                <a href="#link">
                    <span class="<?php $x=1; echo $x == 0 ? "selected" : "barSign";?>">&#8739;</span>
                    <span class="icon"><i class="fas fa-calculator"></i></span>    
                    Angel
                </a>
            </div>
            <div class="menu menu2 stickyBottom">
                <a href="#link">
                    <span class="barSign">&#8739;</span>
                    <span class="icon"><i class="fas fa-info-circle"></i></span>
                    About
                </a>
            </div>
        </div>
        
    </div>
    <div class="rowNav">
        <div class="navBar button" onclick="openNav()">
            <span>&#9776;</span>
        </div>
        <div class="calType">
            <span>Standard</span>
        </div>
    </div>
    <div class="history button" onclick="openHistory()">
        <i class="fas fa-history"></i>
    </div>
</div>

<script>
    function openNav() {
        document.getElementById('sideBarNav').style.width = '80%';
        document.getElementById('thisBlankCloseSideBar').style.width = '100%';
    }
    
    function closeNav() {
        document.getElementById('sideBarNav').style.width = '0';
        document.getElementById('thisBlankCloseSideBar').style.width = '0';
    }
</script>