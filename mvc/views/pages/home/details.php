<style>
    .container {
        margin: 0 auto;
        width: 1140px;
    }

    .details {
        border: 1px solid gainsboro;
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .details-left {
        border-right: 1px solid gainsboro;
        padding: 5px;
        width: 130px;
        height: 100vh;

    }

    .small-img {
        width: 100%;
    }

    .small-img img {
        width: 100%;
    }

    .details-center {
        border-right: 1px solid gainsboro;
        padding: 5px;
        width: 410px;
        height: 100vh;

    }

    .img {
        width: 100%;
    }

    .img img {
        width: 100%;
    }

    .details-right {
        padding: 5px;
        width: 600px;
        height: 100vh;

        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }

    .content-header {
        font-size: xx-large;
        font-weight: 100;
    }
</style>
<div class="container">
    <div class="details">
        <div class="details-left">
            <div class="small-img">
                <img src="http://baodulich.net.vn/data/data/haubg/2018/anh-dep-du-lich/1-2018/21462761_1125939480874318_4665203301540550833_n.jpg" alt="">
            </div>
        </div>
        <div class="details-center">
            <div class="img"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUvIqA55ledNqJA4By_ypZyXYlBUwNtN1gQ1CldOgn0xxVsCLGr_s4it7FlNWCn3bFq6WGPqYoxmczNa77geH9GA0fILHA7hc&usqp=CAU&ec=45725304" alt=""></div>
        </div>
        <div class="details-right">
            <div class="content-header"><?php var_dump($data['Produce']) ?> Ti Vi</div>
            <div class="content-main">

            </div>
            <div class="content-buttons"></div>

        </div>
    </div>

</div>