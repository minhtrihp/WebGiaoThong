<!DOCTYPE html>
<html>
<head>
	<title>Làm bài thi trắc nghiệm</title>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-replace-svg="nest"></script>
</head>
<body>
	 @guest
	 <div class="container">
		 <div class="panel-group" style="margin-top: 70px;">
	       	<div class="panel panel-danger">
		      <div class="panel-heading" style="font-size: 20px;">Thông báo</div>
			      <div class="panel-body" style="text-align: center; font-weight: bold; font-size: 23px;">Vui lòng đăng nhập để được sử dụng chức năng! <br>
			      	Nếu chưa có tài khoản thì vui lòng bấm chọn "Đăng ký" !
			      <br>
			      <a href="/WebGiaoThong/public/login" class="btn btn-danger">Đăng nhập</a>
			      <a href="/WebGiaoThong/public/register" class="btn btn-danger">Đăng ký</a>
			       </div>
		    </div>
		</div>
	</div>
     @else
        @if(Auth::check())
	<div class="container">
		<div class="panel-group">
	    <div class="panel panel-primary">
	      <div class="panel-heading" style="font-size: 20px;">Phần thi lý thuyết giấy phép lái xe
	      	</div>
	      <!-- đồng hồ -->
        <div class="text-center" id="clock" style="font-weight: bolder; font-size: 25px; color: red;">
            <i class="far fa-clock"></i>  <span id="h">Giờ</span> :
            <span id="m">Phút</span> :
            <span id="s">Giây</span>
        </div>
	      <div class="panel-body">
	      	<div class="row text-center" id="textremind1" style="font-size: 20px;">
	      		<span style="color: red; font-weight: bolder;text-decoration: underline;">Chú ý:</span> Bài thi gồm có 20 câu, thời gian làm bài 30 phút được tính kể từ lúc bấm chọn "Làm bài thi".
	      	</div>
	      	<div class="row text-center" id="textremind2" style="font-size: 20px;">
	      		<span style="color: red; font-weight: bolder;text-decoration: underline;">Chú ý:</span> Sau khi bấm chọn "Kết thúc bài thi" thì không thể tiếp tục làm bài thi.
	      	</div>
	      	<br>
	      	<div class="row">
	      		<div class="col-sm-12 text-center">
	      			<button type="button" name="button" class="btn btn-success btn-lg" id="btnStart">Làm bài thi</button>
	      		</div>
	      	</div>
	      	<div id="questions">
	      		<!-- đổ dữ liệu ở file questions.php thông qua hàm GetQuestion-->
	      	</div>
	      	<div class="row align-items-end">
	      		<div class="col-sm-12 text-center">
	      			<button type="button" class="btn btn-warning" id="btnFinish">Kết thúc bài thi</button>
	      		</div>
	      	</div>
	      	<div class="row">
	      		<div class="col" style="float:left; margin-left:10px;width:100px;">
	      			<a id='backto' href="/WebGiaoThong/public/" class="btn btn-secondary btn-lg"><i class="fas fa-arrow-circle-left"></i> Về trang chủ</a>
	      		</div>
	      		<div class="col" style="display: inline-block; margin-left: 380px; width:200px;">
	      			<h4 id='mark' class="text-info"></h4>
	      		</div>
	      		<div class="col" style="float: right; width: 100px;">
	      			<a id='testagain' href="javascript:location.reload(true)" class="btn btn-secondary btn-lg"><i class="fas fa-sync-alt fa-spin"></i> Thi lại</a>
	      		</div>
	      	</div>
	      </div>
	    </div>
	  </div>
	</div>
	@endif
    @endguest

</body>
</html>


<script type="text/javascript">
	 var h = null; // Giờ
     var m = null; // Phút
     var s = null; // Giây
             
     var timeout = null; // Timeout
             
	$(document).ready(function(){
	  $('#btnFinish').hide();
	  $('#clock').hide();
	  $('#backto').hide();
	  $('#testagain').hide();
	  $('#textremind2').hide();

	});
	var questions;//biến toàn cục để lưu danh sách câu hỏi

	$('#btnStart').click(function(){
	  GetQuestions();
	  $('#clock').show();
	  start();
	  $('#btnFinish').show();
	  $(this).hide();
	  $('#textremind1').hide();
	  $('#textremind2').show();
	});
	$('#btnFinish').click(function(){
	  $(this).hide();
	  clearTimeout(timeout);
	  CheckResult();
	  $('#backto').show();
	  $('#testagain').show();
	});
	function CheckResult(){
	  let mark = 0;
	  $('#questions div.row').each(function(k,v){
			//bước 1: lấy đáp án đúng của câu hỏi
			let ID = $(v).find('h5').attr('id'); //lấy thuộc tính id của thẻ h5
			let question = questions.find(x=>x.ID == ID);//tìm câu hỏi trong mảng questions dựa vào id đã có ở trên
			let answer = question['correct'];

			//bước 2: lấy đáp án mà người dùng đã check
			let choice = $(v).find('fieldset input[type="radio"]:checked').attr('class');
			if(choice == answer){
		      mark +=2;//mỗi câu đúng được cộng 2 điểm
		    }else{
		        console.log('Câu có id: '+ID+' sai');
		    }
		    //bước 3: đánh dấu đáp án đúng để người dùng đối chiếu
    	$('#question_'+ID+' > fieldset > div > label.'+answer).css("background-color", "yellow");
		});
		console.log('Điểm của bảng là: '+mark);
		$('#mark').text('Điểm của bạn là: '+mark);

		$(".A").prop("disabled", true);
		$(".B").prop("disabled", true);
		$(".C").prop("disabled", true);
		$(".D").prop("disabled", true);
	}

	function start(){
                /*BƯỚC 1: LẤY GIÁ TRỊ BAN ĐẦU*/
    if (h === null)
    {
        h = "00";
        m = 29;
        s = 59;
    }

    /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
    // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
    //  - giảm số phút xuống 1 đơn vị
    //  - thiết lập số giây lại 59
    if (s === -1){
        m -= 1;
        s = 59;
    }

    // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
    //  - giảm số giờ xuống 1 đơn vị
    //  - thiết lập số phút lại 59
    if (m === -1){
        h -= 1;
        m = 59;
    }

    // Nếu số giờ = -1 tức là đã hết giờ, lúc này:
    //  - Dừng chương trình
    if (h == -1){
        clearTimeout(timeout);
        alert('Hết giờ');
        return false;
    }

    /*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/
    document.getElementById('h').innerText = h.toString();
    document.getElementById('m').innerText = m.toString();
    document.getElementById('s').innerText = s.toString();

    /*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
    timeout = setTimeout(function(){
        s--;
        start();
    }, 1000);
    }

	function GetQuestions(){
	$.ajax({
		url:'http://localhost:81/WebGiaoThong/questions.php',
		type: 'get',
		dataType: 'json',
		success:function(data){
	      questions = jQuery.parseJSON(JSON.stringify(data));
	      let index = 1;
	      let d = '';
      $.each(questions,function(k,v){
        d+=   '<div class="row" style = "margin-left:10px;" id="question_'+v['ID']+'"> ';
        d+=   '<h5 style="font-weight:bold;" id="'+v['ID']+'"> <span class="text-danger">Câu '+index+': </span>'+v['question']+'</h5>';
        d+=   '<img width="550px" height="280px" src="upload/questions_img/'+v['picture']+'" alt="">';
        d+=   '<fieldset>';
        d+=   '<div class="radio col-md-12 ">';
        d+=    '<label class = "A"><input type="radio" class="A" name = "'+v['ID']+'"><span class="text-danger">A: </span>'+v['option_a']+'</label>';
        d+=   '</div>';
        d+=  ' <div class="radio col-md-12">';
        d+=     '<label class = "B"><input type="radio" class="B" name = "'+v['ID']+'"><span class="text-danger">B: </span>'+v['option_b']+'</label>';
        d+=   '</div>';
        d+=   '<div class="radio  col-md-12">';
        d+=     '<label class = "C"><input type="radio"  class="C" name = "'+v['ID']+'"><span class="text-danger">C: </span>'+v['option_c']+'</label>';
        d+=   '</div>';
        d+=   '<div class="radio col-md-12">';
        d+=     '<label class = "D"><input type="radio" class="D" name = "'+v['ID']+'"><span class="text-danger">D: </span>'+v['option_d']+'</label>';
        d+=   '</div>';
        d+=  '</fieldset>';
        d+= '</div>';
        index++;
      });
      $('#questions').html(d);
    }
  });
}
</script>
