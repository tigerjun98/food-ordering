<script type="text/javascript">

var newwindow;
const createPop = (url, name) => {
    newwindow = window.open(url, name,'width=560,height=340,toolbar=0,menubar=0,location=0');
    newwindow.moveTo(0, 0);
    newwindow.resizeTo(screen.width, screen.height);
    if (window.focus) { newwindow.focus() }
    // setTimeout(function(){ newwindow.close(); }, 1000);
}
</script>
