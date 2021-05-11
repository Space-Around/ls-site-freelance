// document.getElementById('download').style.display = "none";

document.querySelector("#send").onclick = () => {
    let inputImage = document.querySelector("#image");
    let inputWatermark = document.querySelector("#watermark");
    let fd = new FormData;

    fd.append('image', inputImage.files[0]);
    fd.append('wahtermark', inputWatermark.files[0]);

    $.ajax({
        url: '/site2_1/php/watermark.php',
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            const imgB64 = data;
            // document.getElementById('download').style.display = "block";
            document.getElementById('downloadlink').href = `data:image/png;base64,${imgB64}`;
        }
    });
}