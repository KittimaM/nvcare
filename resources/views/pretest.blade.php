<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>pretest</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{{ asset ('bootstrap-5.1.0-dist\css\bootstrap.min.css') }}">
  <link rel="stylesheet" href="test/style.css">
  <link href="{{ asset('https://fonts.googleapis.com/css2?family=Itim&display=swap') }}" rel="stylesheet">
  <script  src="test/script.js"></script>

  
</head>
<body>
	
	<!-- partial:index.partial.html -->
	<div class="form-wrapper">
		<h2>Pretest</h2>
		
		<form action="{{route('sendpretest')}}" method ="post">
			@csrf
			<div class="form-group">
			<p>1.ข้อใดคือหลักการที่ถูกต้องในการเลือกซื้อหน้ากากอนามัย</p>
			<label for="choice-1">
				<input type="radio" id="choice-1" name="{{1}}" value="0" />
				<div>
					มีราคาถูกกว่า 
				</div>
			</label>
			
			<label for="choice-2">
				<input type="radio" id="choice-2" name="{{1}}" value="0" />
				<div>
					สีสัน ลวดลายสวยงาม
				</div>
			</label>
			
			<label for="choice-3">
				<input type="radio" id="choice-3" name="{{1}}" value="0" />
				<div>
					มีความบางเพื่อระบายอากาศ
				</div>
			</label>
			
			<label for="choice-4">
				<input type="radio" id="choice-4" name="{{1}}" value="1" />
				<div>
					มีขนาดที่เหมาะสม และมีความหนามากกว่า 3 ชั้น
				</div>
			</label>
			</div>
			<div class="form-group">
			<br>
			<p>2.หากท่านมีความจำเป็นต้องออกไปซื้อของใช้หรือไปร้านอาหารควรปฎิบัติตนอย่างไร </p>
			<label for="choice-1">
				<input type="radio" id="choice-1" name="{{2}}" value="0" />
				<div>
					เดินดื่มน้ำขณะออกจากร้านสะดวกซื้อ 
				</div>
			</label>

			<label for="choice-2">
				<input type="radio" id="choice-2" name="{{2}}" value="1" />
				<div>
					ใส่หน้ากากอนามัยและรักษาระยะห่าง
				</div>
			</label>
			
			<label for="choice-3">
				<input type="radio" id="choice-3" name="{{2}}" value="0" />
				<div>
					เดินเล่นโดยไม่ใส่หน้ากากอนามัยบริเวณที่ไม่มีคน
				</div>
			</label>
			
			<label for="choice-4">
				<input type="radio" id="choice-4" name="{{2}}" value="0" />
				<div>
					นั่งเล่นบริเวณร้านอาหารหลังจากไม่ได้ออกมานาน
				</div>
			</label>
			</div>
			<div class="form-group">
			<br>
			<p>3. ขณะที่ท่านสั่งอาหารในร้านอาหารแห่งหนึ่ง ท่านสังเกตเห็นพ่อครัวไอและไม่ใส่หน้ากากอนามัยขณะทำอาหารให้ลูกค้า เมื่อท่านกลับบ้านและรับประทานอาหารเรียบร้อยแล้วได้รับแจ้งจากพ่อครัวว่าติดเชื้อไวรัสโคโรน่า2019 
				ท่านคิดว่าความร้อนจากการทำอาหารสามารถฆ่าเชื้อได้หรือไม่เพราะเหตุใด  </p>
			<label for="choice-1">
				<input type="radio" id="choice-1" name="{{3}}" value="0" />
				<div>
					ได้เพราะอาหารมีรสชาติอร่อย 
				</div>
			</label>
			
			<label for="choice-2">
				<input type="radio" id="choice-2" name="{{3}}" value="1" />
				<div>
					ได้เพราะ ความร้อน ทำให้ไวรัสตายได้ 
				</div>
			</label>
			
			<label for="choice-3">
				<input type="radio" id="choice-3" name="{{3}}" value="0" />
				<div>
					ไม่ได้เพราะเชื้อไวรัสจะตายในอุณหภูมิเย็น			
				</div>
			</label>
			
			<label for="choice-4">
				<input type="radio" id="choice-4" name="{{3}}" value="0" />
				<div>
					ไม่ได้เพราะการแพร่ระบาดของเชื้อไวรัสโคโรนา 2019 (COVID-19) ไม่ถูกทำลายให้ตายด้วยความร้อน
				</div>
			</label>
			</div>

			<div class="form-group">
			<br>
			<p>4.การปฎิบัติตัวเกี่ยวกับการดูแลตนเองในสถานการณ์การแพร่ระบาดเชื้อไวรัสโคโรนา 2019 (COVID-19)
				ในข้อใดไม่เหมาะสม
			</p>

			<label for="choice-1">
				<input type="radio" id="choice-1" name="{{4}}" value="0" />
				<div>
					ชวนเพื่อนสมัยเรียนมาจัดงานวันเกิด			
				</div>
			</label>
			
			<label for="choice-2">
				<input type="radio" id="choice-2" name="{{4}}" value="0" />
				<div>
					ชำระเงินทางออนไลน์แทนการจ่ายเงินสด 			
				</div>
			</label>
			
			<label for="choice-3">
				<input type="radio" id="choice-3" name="{{4}}" value="0" />
				<div>
					ล้างมือหลังจากใส่และถอดหน้ากากอนามัย	
				</div>
			</label>
			
			<label for="choice-4">
				<input type="radio" id="choice-4" name="{{4}}" value="1" />
				<div>
					ออกไปรับของหน้าบ้านโดยไม่ใส่หน้ากากอนามัย 
				</div>
			</label>
			</div>
			<div class="form-group">
			<br>
			<p>5.อาการอย่างไรควรมีการกักตัวอยู่บ้าน </p>
			<label for="choice-1">
				<input type="radio" id="choice-1" name="{{5}}" value="0" />
				<div>
					สมหญิงมีไข้หลังจากตากฝน			
				</div>
			</label>
			
			<label for="choice-2">
				<input type="radio" id="choice-2" name="{{5}}" value="0" />
				<div>
					สมหมายมีอาการไอหลังจากเดินผ่านร้านอาหารตามสั่ง			
				</div>
			</label>
			
			<label for="choice-3">
				<input type="radio" id="choice-3" name="{{5}}" value="0" />
				<div>
					สมปองพูดคุยกับเพื่อนบ้านในระยะ2เมตรและสวมใส่หน้ากากอนามัย 			
				</div>
			</label>
			
			<label for="choice-4">
				<input type="radio" id="choice-4" name="{{5}}" value="1" />
				<div>
					สมชายพูดคุยกับมินนี่ที่เดินทางมาจากพื้นที่เสี่ยงโดยไม่ใส่หน้ากากอนามัย 			
				</div>
			</label>
			</div>

			<div class="form-group">
			<br>
			<p>6. เด็กหญิงมินนี่กลับจากการศึกษาต่อจากต่างประเทศควรปฏิบัติตนอย่างไรตามมาตรการป้องกันโรคและ ควบคุมโรค ข้อใดถูกต้อง</p>
			<label for="choice-1">
				<input type="radio" id="choice-1" name="{{6}}" value="0" />
				<div>
					ใส่หน้ากากอนามัยตลอดเวลา 
				</div>
			</label>
			
			<label for="choice-2">
				<input type="radio" id="choice-2" name="{{6}}" value="0" />
				<div>
					รับประทานอาหารแยกกับครอบครัว			
				</div>
			</label>
			
			<label for="choice-3">
				<input type="radio" id="choice-3" name="{{6}}" value="0" />
				<div>
				รีบเดินทางเข้ากักตัวที่บ้านของตัวเอง 14 วัน
				</div>
			</label>
			
			<label for="choice-4">
				<input type="radio" id="choice-4" name="{{6}}" value="1" />
				<div>
				เข้ากัก State Quarantine ที่ทางรัฐบาลจัดเตรียมไว้ 14 วัน
				</div>
			</label>
			</div>

			<div class="form-group">
			<br>
			<p>7. อีก2วันข้างหน้ามีการจัดกิจกรรมรับน้องแต่ถ้าหากท่านอยู่ในเขตพื้นที่สีแดง(เกณฑ์การแบ่งพื้นที่สถานการณ์)ท่านจะปฎิบัติอย่างไร </p>
			<label for="choice-1">
				<input type="radio" id="choice-1" name="{{7}}" value="0" />
				<div>
					จัดกิจกรรมได้ตามปกติ 
				</div>
			</label>
			
			<label for="choice-2">
				<input type="radio" id="choice-2" name="{{7}}" value="1" />
				<div>
					งดจัดกิจกรรมที่มีการรวมคนจำนวนมาก   
				</div>
			</label>
			
			<label for="choice-3">
				<input type="radio" id="choice-3" name="{{7}}" value="0" />
				<div>
					สามารถจัดกิจกรรมได้ แต่มีการเว้นระยะห่าง 
				</div>
			</label>
			
			<label for="choice-4">
				<input type="radio" id="choice-4" name="{{7}}" value="0" />
				<div>
					สามารถจัดกิจกรรมได้ แต่มีการปฎิบัติตนตามหลัก DMHTTA
				</div>
			</label>
			</div>

			<div class="form-group">
			<br>
			<p>8. จากสถานการณ์แพร่ระบาดเชื้อไวรัสโคโรนา 2019 (COVID-19)ท่านจะมีวิธีการดูเเลตนเองตามหลัก DMHTT อย่างไร</p>
			<label for="choice-1">
				<input type="radio" id="choice-1" name="{{8}}" value="0" />
				<div>
				วัดอุณหภูมิและแสกนแอปไทยชนะ
				</div>
			</label>
			
			<label for="choice-2">
				<input type="radio" id="choice-2" name="{{8}}" value="0" />
				<div>
				ใส่หน้ากากอนามัยมีการเว้นระยะห่างและหมั่นล้างมือบ่อยๆ
				</div>
			</label>
			
			<label for="choice-3">
				<input type="radio" id="choice-3" name="{{8}}" value="0" />
				<div>
				งดการออกจากบ้านตรียมเครื่องใช้ส่วนตัวให้พร้อมเเละคอยสังเกตอาการของตนเอง
				</div>
			</label>
			
			<label for="choice-4">
				<input type="radio" id="choice-4" name="{{8}}" value="1" />
				<div>
				ถูกทั้งข้อ A และ B
				</div>
			</label>
			</div>

			<div class="form-group">
			<br>
			<p>9. ข้อใดถูกต้องเกี่ยวกับวัคซีนประเภท Messenger Ribonucleic Acid (mRNA)</p>
			<label for="choice-1">
				<input type="radio" id="choice-1" name="{{9}}" value="0" />
				<div>
					มีผลข้างเคียงหลังได้รับวัคซีนที่รุนแรง
				</div>
			</label>
			
			<label for="choice-2">
				<input type="radio" id="choice-2" name="{{9}}" value="1" />
				<div>
					ทำให้ร่างกายสร้างโปรตีนที่กระตุ้นให้เกิดการตอบสนองทางภูมิคุ้มกันในร่างกาย และสร้างแอนติบอดีขึ้น
				</div>
			</label>
			
			<label for="choice-3">
				<input type="radio" id="choice-3" name="{{9}}" value="0" />
				<div>
					นำเชื้อไวรัสโคโรนามาเพาะเลี้ยงบนเซลล์ที่ใช้ทำวัคซีนแล้วนำฆ่าเชื้อให้ตาย กระตุ้นให้ระบบภูมิคุ้มกันสร้างแอนติบอดี
				</div>
			</label>
			
			<label for="choice-4">
				<input type="radio" id="choice-4" name="{{9}}" value="0" />
				<div>
					นำสารพันธุกรรมของไวรัสโคโรนาใส่เข้าไปในไวรัสที่เป็นพาหะ แล้วเซลล์ในร่างกายจะสร้างปุ่มโปรตีนไวรัสโคโรนาขึ้น <br>กระตุ้นให้ระบบภูมิคุ้มกันสร้างแอนติบอดี
				</div>
			</label>
			</div>

			<div class="form-group">
			<br>
			<p>10. อาการแพ้วัคซีนกับอาการไม่พึงประสงค์แตกต่างกันหรือไม่ </p>
			<label for="choice-1">
				<input type="radio" id="choice-1" name="{{10}}" value="0" />
				<div>
				ไม่แตกต่าง เพราะ มีไข้สูงเหมือนกัน 
				</div>
			</label>
			
			<label for="choice-2">
				<input type="radio" id="choice-2" name="{{10}}" value="0" />
				<div>
				ไม่แตกต่าง เพราะ เป็นอาการที่ไม่อันตราย
				</div>
			</label>
			
			<label for="choice-3">
				<input type="radio" id="choice-3" name="{{10}}" value="1" />
				<div>
				แตกต่าง เพราะ อาการแพ้วัคซีนทำให้เสียชีวิตได้ 
				</div>
			</label>
			
			<label for="choice-4">
				<input type="radio" id="choice-4" name="{{10}}" value="0" />
				<div>
				แตกต่าง เพราะ อาการไม่พึงประสงค์สามารถควบคุมไม่ให้เกิดได้  
				</div>
			</label>
			</div>

		<br>
		<h2>แบบประเมินความรอบรู้ด้านสุขภาพในการดูแลตนเองจากสถานการณ์การแพร่ระบาดของเชื้อไวรัสโคโรนา 2019 (COVID-19)</h2>
		<br>
		<h4> ด้านการเข้าถึงข้อมูลสุขภาพและบริการสุขภาพ</h4>
			<div class="form-group">
				<br>
				<p>1.เมื่อท่านต้องการรู้เรื่องข้อมูลสุขภาพและบริการสุขภาพเกี่ยวกับสถานการณ์การแพร่ระบาดของเชื้อไวรัสโคโรนา 2019 (COVID-19)
					 ท่านสามารถค้นหา และเลือกแหล่งข้อมูลสุขภาพได้โดยง่าย</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{11}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{11}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{11}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{11}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{11}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>2.เมื่อท่านกังวลใจ ท่านจะรีบค้นหาข้อมูลที่เชื่อถือได้เกี่ยวกับการ ป้องกันและดูแลสุขภาพก่อน เพื่อลดความสับสนและกังวลใจนั้น</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{12}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{12}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{12}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{12}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{12}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>3.ท่านแสวงหาข้อมูลด้านสุขภาพ พร้อมเปิดรับความรู้ใหม่ๆอยู่เสมอ เพื่อท่านจะได้เป็นผู้ที่มีสุขภาพที่ดี</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{13}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{13}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{13}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{13}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{13}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>4.ท่านติดตามอ่านคำแนะนำที่เกี่ยวกับการป้องกันดูแลสุขภาพทั้งในเอกสารความรู้ คู่มือสุขภาพ หรือข้อความข่าวสารผ่านออนไลน์</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{14}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{14}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{14}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{14}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{14}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>

			<br>
			<h4> ด้านความรู้ความเข้าใจ</h4>

			<div class="form-group">
				<br>
				<p>5.ท่านสามารถทำความเข้าใจและสามารถปฏิบัติตามคำแนะนำในคู่มือเอกสารหรือแผ่นพับที่เกี่ยวกับการดูแลสุขภาพป้องกันตนเอง </p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{15}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{15}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{15}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{15}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{15}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>

			<div class="form-group">
				<br>
				<p>6.จากสถานการณ์การแพร่ระบาดของเชื้อไวรัสโคโรนา 2019 (COVID-19) ท่านสามารถติดต่อกับสายด่วนของหน่วยงานได้</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{16}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{16}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{16}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{16}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{16}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>7.ท่านเข้าใจและรู้แจ้งถึงเหตุผลของมาตรการสกัดการแพร่ระบาดของเชื้อไวรัสโคโรนา 2019 (COVID-19)</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{17}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{17}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{17}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{17}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{17}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>8.ท่านมักเปรียบเทียบข้อมูลด้านสุขภาพที่รับรู้จากแหล่งต่างๆก่อนตัดสินใจเชื่อหรือทำตาม</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{18}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{18}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{18}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{18}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{18}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>

			<br>
			<h4>ด้านทักษะการสื่อสาร</h4>

			<div class="form-group">
				<br>
				<p>9.ท่านสามารถสื่อสารข้อมูลความรู้เกี่ยวกับการดูแลตนเองจากเชื้อไวรัสโคโรนา 2019 (COVID-19) 
					ด้วยวิธีการพูด อ่าน เขียนให้บุคคลอื่นเข้าใจ</p>
					<label for="choice-1">
					<input type="radio" id="choice-1" name="{{19}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{19}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{19}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{19}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{19}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>10.ท่านสามารถสื่อสารแลกเปลี่ยนความรู้การดูแลตนเองจากเชื้อไวรัสโคโรนา 2019 (COVID-19) กับบุคคลอื่น</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{20}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{20}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{20}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{20}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{20}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>

			<div class="form-group">
				<br>
				<p>11.ท่านเล่าเรื่องการดูเเลตนเองเกี่ยวกับการแพร่ระบาดของเชื้อไวรัสโคโรนา 2019 (COVID-19) 
					ให้กับคนในครอบครัวหรือเพื่อนฟัง จนเขาเข้าใจอยู่บ่อยครั้งแค่ไหน</p>
					<label for="choice-1">
					<input type="radio" id="choice-1" name="{{21}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{21}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{21}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{21}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{21}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>

			<div class="form-group">
				<br>
				<p>12.ถ้าหากท่านหรือคนในครอบครัวได้รับเชื้อไวรัสโคโรนา 2019 (COVID-19) 
					ท่านสามารถติดต่อสายด่วนกับหน่วยงานต่างๆให้มาช่วยเหลือได้</p>
					<label for="choice-1">
					<input type="radio" id="choice-1" name="{{22}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{22}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{22}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{22}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{22}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>

			<br>
			<h4>ด้านทักษะการตัดสินใจ</h4>

			<div class="form-group">
				<br>
				<p>13.ท่านมีความตระหนักเกี่ยวกับการป้องกันและดูแลตนเองให้ห่างไกลจากเชื้อไวรัสโคโรนา 2019 (COVID-19) </p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{23}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{23}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{23}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{23}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{23}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>14.ท่านดูเเลตอนเองและครอบครัวให้ห่างไกลจากเชื้อไวรัสโคโรนา 2019 (COVID-19)</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{24}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{24}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{24}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{24}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{24}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>15.ถ้าคนในครอบครัวท่านได้รับเชื้อไวรัส โคโรน่า 2019 ท่านสามารถร่วมตัดสินใจในการแก้ไขปัญหาได้</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{25}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{25}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{25}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{25}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{25}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>

			<h4> ด้านการเข้าถึงข้อมูลสุขภาพและบริการสุขภาพ</h4>

			<div class="form-group">
				<br>
				<p>16.ท่านมักศึกษาเปรียบเทียบข้อมูลด้านสุขภาพจากหลายแหล่ง เพื่อยืนยันความเข้าใจที่ถูกต้อง ก่อนที่จะส่งต่อ หรือบอกผู้อื่นต่อ</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{26}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{26}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{26}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{26}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{26}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>

			<br>
			<h4>ด้านการจัดการตนเอง</h4>

			<div class="form-group">
				<br>
				<p>17.ท่านมีการสืบค้นข้อมูลเกี่ยวกับวัคซีนป้องกันโควิด-19 เพื่อหาวัคซีนที่เหมาะสมกับตัวท่าน</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{27}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{27}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{27}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{27}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{27}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>18.ท่านมีการป้องกันตนเองตามหลักมาตรฐาน DMHTTA ที่กระทรวงสาธารณะสุขกำหนด</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{28}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{28}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{28}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{28}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{28}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>19.ท่านมีการปรับเปลี่ยนพฤติกรรมในการดูแลตนเอง และป้องกันตนเองตามสถานการณ์โควิด-19</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{29}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{29}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{29}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{29}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{29}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>

			<h4>ด้านการรู้เท่าทันสื่อ</h4>

			<div class="form-group">
				<br>
				<p>20.ท่านมีการรับรู้ข่าวสารทางแอพพลิเคชั่นเกี่ยวกับ การแพร่ระบาดของเชื้อไวรัสโคโรนา 2019 (COVID-19)</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{30}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{30}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{30}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{30}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{30}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>

			<br>
			

			<div class="form-group">
				<br>
				<p>21.ท่านคิดว่าการรู้เท่าทันข่าวสารเกี่ยวกับสถานการณ์การแพร่ระบาดของเชื้อไวรัส  โคโรนา 2019 (COVID-19) 
					เป็นประโยชน์ต่อท่าน</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{31}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{31}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{31}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{31}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{31}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>22.ท่านมักตรวจสอบความถูกต้องของข้อมูลโดยการสอบถามจากผู้รู้ด้านสุขภาพนั้นก่อนที่จะนำข้อมูลไปใช้หรือปฏิบัติตาม</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{32}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{32}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{32}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{32}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{32}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>23.ท่านนำข้อมูลด้านสุขภาพที่ถูกต้องมาจากแหล่งต่างๆ มาใช้ประกอบการยืนยันข้อมูลนั้นก่อนตัดสินใจเชื่อและปฏิบัติตาม</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{33}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{33}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{33}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{33}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{33}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>24.ท่านสามารถใช้เหตุผลในการวิเคราะห์ข้อดีข้อเสียเพื่อเลือกรับข้อมูลสุขภาพจากสื่อ หรือจากคนอื่นๆก่อนที่จะปฏิบัติตาม</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{34}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{34}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{34}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{34}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{34}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>
			<div class="form-group">
				<br>
				<p>25.ท่านคิดว่าการรู้เท่าทันข่าวสารเกี่ยวกับสถานการณ์การแพร่ระบาดของเชื้อไวรัสโคโรนา 2019 (COVID-19)
					 สำคัญกับท่านมากน้อยเพียงใด</p>
				<label for="choice-1">
					<input type="radio" id="choice-1" name="{{35}}" value="0" />
					<div>
						0 ไม่ได้ปฏิบัติ 
					</div>
				</label>

				<label for="choice-2">
					<input type="radio" id="choice-2" name="{{35}}" value="1" />
					<div>
						1 นานๆครั้ง
					</div>
				</label>
				
				<label for="choice-3">
					<input type="radio" id="choice-3" name="{{35}}" value="2" />
					<div>
						2 บางครั้ง
					</div>
				</label>
				
				<label for="choice-4">
					<input type="radio" id="choice-4" name="{{35}}" value="3" />
					<div>
						3 บ่อยครั้ง
					</div>
				</label>
				<label for="choice-5">
					<input type="radio" id="choice-5" name="{{35}}" value="4" />
					<div>
						4 ทุกครั้ง
					</div>
				</label>
				
			</div>

			


			<button type="submit" value="{{ $user_name }}" name="user_name">Submit</button>
		</form>
	


	</div> <!-- .form-wrapper  -->
	<!-- partial -->
 

</body>
</html>
