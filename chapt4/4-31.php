<!--�ļ�4-31.php-->
<HTML>
	<HEAD>
		<TITLE>��ļ̳����̬</TITLE>
	</HEAD>
	<BODY>
		<?php
			class point
			{
				public $x;    //���x����
				public $y;    //���y����
				function Point($x=0,$y=0)    //���캯������ʼ��xֵ��yֵ
				{
					$this->x=$x;
					$this->y=$y;
				}
				function setx($px=0)    //����x����ֵ
				{
					$this->x=$px;
				}
				function sety($py=0)    //����y����ֵ
				{
					$this->y=$py;
				}
				function getx()    //�õ�x����ֵ
				{
					return $this->x;
				}
				function gety()    //�õ�x����ֵ
				{
					return $this->y;
				}
				function moveto($x,$y)    //�ƶ���
				{
					if ($x<0||$y<0)
					{
						echo "Բ���ƶ�ʧ��!<br>";
						return;
					}
					$this->x=$x;
					$this->y=$y;
					echo "Բ���ƶ��ɹ�!<br>";
				}
			}
			
			class circle extends point
			{
				public $radius;
				function Circle($x=10,$y=10,$r=5)    //���캯������ʼ��
				{
					$this->x=$x;    //Բ��x����
					$this->y=$y;    //Բ��y����
					$this->radius=$r;    //Բ�뾶
				}
				function setradius($r)
				{
					$this->radius=$r;
				}
				function getradius($r)
				{
					return $this->radius;
				}
				function moveto($x,$y)    //�ƶ�Բ
				{
					if ($x<($this->radius)||$y<($this->radius))
					{
						echo "Բ���ƶ�ʧ��!<br>";
						return;
					}
					$this->x = $x;
					$this->y = $y;
					echo "Բ���ƶ��ɹ�!<br>";
				}
			}
			$mypoint=new point(20, 20);  //����һ������(20,20)�ĵ�
			$mycircle=new circle(20, 20, 10);  //����һ��Բ�Ĵ���(20,20)���뾶Ϊ10��Բ
			$mycircle->setx(30);  //���ø��ຯ�����ı�Բ������xֵ
			$mypoint->moveto(5,5);  //�ƶ��㣬�ɹ�
			$mycircle->moveto(5,5);  //�ƶ�Բ��ʧ��
		?>
	</BODY>
</HTML>

