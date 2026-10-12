class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function sortColors(&$nums) {
        $low = 0;
        $mid = 0;
        $high = count($nums) - 1;

        while ($mid <= $high){
            if($nums[$mid] == 2){
                $temp = $nums[$mid];
                $nums[$mid] = $nums[$high];
                $nums[$high] = $temp;
                $high--;
            }elseif($nums[$mid] == 1){
                $mid++;
            }else{
                $temp = $nums[$mid];
                $nums[$mid] = $nums[$low];
                $nums[$low] = $temp;
                $mid++;
                $low++;
            }
        }
    }
}