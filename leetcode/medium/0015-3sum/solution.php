class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        sort($nums);
        
        $countArr = count($nums);
        $res = [];
        $p = 0;
        for ($i = 0;$i < $countArr - 2; $i++){
            if($i > 0 && $nums[$i] == $nums[$i - 1]) {
                continue;
            }
            $l = $i + 1;
            $r = $countArr - 1;

            while($l < $r){
                $sum = $nums[$i] + $nums[$l] + $nums[$r];
                if($sum == 0){
                    $res[] = [$nums[$i], $nums[$l], $nums[$r]];
                    $l++;
                    $r--;
                    while($l < $countArr && $nums[$l] == $nums[$l - 1]){
                        $l++;
                    }
                    while($r >= 0 && $nums[$r] == $nums[$r + 1]){
                        $r--;
                    }
                }elseif($sum < 0){
                    $l++;
                }else{
                    $r--;
                }
            }
        }

        return $res;
    }
}