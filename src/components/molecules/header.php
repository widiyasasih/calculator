<div class="header">
    <div id="sideBarNav" class="sideBar">
        <a href="javascript:void(0)" class="closeBtn button" onclick="closeNav()">&times;</a>
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
        document.getElementById('sideBarNav').style.width = '260px';
    }
    
    function closeNav() {
        document.getElementById('sideBarNav').style.width = '0';
    }
</script>