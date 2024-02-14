<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
    header("location: admin.php");
    exit;
}
$description = '';
$keywords = '';
$title = 'Admin - Home page';
include_once 'adminHeader.php';
?>

    <div class="content">
        <div class="row">
            <h1 class="content-title">Welcome to the home page!</h1>
            <p class="content-subheading">Main information</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis, ex eu tristique porttitor,
                urna magna lobortis ipsum, a pretium neque neque eget dui. Suspendisse sit amet velit ante. Sed quis
                posuere risus. In eget eros velit. Duis non rhoncus massa. Phasellus vel eros sem. Praesent molestie
                nisi at magna volutpat molestie. Ut eget nunc malesuada, ornare diam ut, mattis lacus. Fusce quis ligula
                ante.
                <br/><br/>
                Ut placerat nunc dictum massa vulputate ultrices. Pellentesque habitant morbi tristique senectus et
                netus et malesuada fames ac turpis egestas. Suspendisse sem purus, iaculis id tempor non, sollicitudin
                id nibh. Curabitur eu ex urna. Mauris tempus tincidunt mauris et venenatis. Ut dapibus sodales arcu.
                Nunc tincidunt nisi ac erat egestas, non scelerisque ex venenatis. Praesent sit amet malesuada nulla.
                Donec at semper tortor. Phasellus ligula neque, dapibus eget quam in, congue rutrum neque.
                <br/><br/>
                Integer tempor ipsum a metus mollis rutrum. Nulla lectus enim, facilisis eu massa vel, dignissim
                venenatis elit. Proin semper, mauris a condimentum consectetur, risus magna blandit felis, ac tempor
                mauris mauris eget ligula. Sed fermentum varius condimentum. Nulla sit amet cursus ante, vitae imperdiet
                lacus. Fusce vel interdum leo. Morbi rutrum nibh tellus, a luctus nisl euismod non. Aenean ut nisl a leo
                tempus cursus. Quisque tincidunt magna nec nunc pellentesque faucibus. Nunc finibus nunc nec rutrum
                ullamcorper.
                <br/><br/>
                Nam dignissim metus sit amet magna tristique lobortis. Praesent facilisis fringilla tortor non dictum.
                Duis aliquam mi eget ligula lacinia, vel sodales enim mollis. Nunc quis elit eget leo elementum pharetra
                id dignissim magna. In rutrum varius urna. Aenean sollicitudin ut arcu at tristique. Sed ultricies dui
                quam, ac lacinia lorem varius ullamcorper. Sed pulvinar aliquet convallis. Mauris rutrum bibendum velit,
                vitae pharetra lectus facilisis non.
                <br/><br/>
                Nam justo nisi, euismod vulputate risus non, eleifend scelerisque lorem. Donec imperdiet mattis
                elementum. Etiam lectus est, viverra a quam ac, vulputate iaculis massa. Orci varius natoque penatibus
                et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque vel euismod diam. Etiam tristique
                quam sed felis imperdiet gravida. In ultricies facilisis pharetra. Proin quis sem non eros scelerisque
                vestibulum. Fusce rutrum malesuada erat, sit amet scelerisque tortor rutrum in.</p>
        </div>
    </div>


<?php
include_once 'adminFooter.php';
?>