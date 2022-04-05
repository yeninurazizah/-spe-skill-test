<?php

function main() {
	$num = new SpeSkillTest();

	$num->narcissistic(153);
	$num->narcissistic(111);
}
main();

class SpeSkillTest {
    public function narcissistic($num){
        if($this->is_narcissist($num) == $num){
            echo ("narcissistic(".$num.") is True\n");
        }else{
            echo ("narcissistic(".$num.") is False\n");
        }
    }

    public function is_narcissist($num){
        $len = $this->num_length($num);
        $data = $num;

        $result = 0; $digit=0;

        while ($data !=0){
            $digit = $data%10;
            $data= intval($data/10);
            $result = (pow($digit,$len))+$result;
        }
        return $result;
    }

    public function num_length($num){
        $len = 0;
        while ($num !=0){
            $num = intval($num/10);
            $len++;
        }
        return $len;
    }
    
};


