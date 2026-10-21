class Solution {

    /**
     * @param Integer $n
     * @param Integer[][] $grid
     * @param Integer[] $rowShift
     * @param Integer[] $colShift
     * @return Integer[][]
     */
    function cyclicShift($n, $grid, $rowShift, $colShift) {
        $temp = array_fill(0, $n, array_fill(0, $n, 0));
        $result = array_fill(0, $n, array_fill(0, $n, 0));

        // Step 1: Shift rows left
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {

                $newCol = ($j - $rowShift[$i] + $n) % $n;

                $temp[$i][$newCol] = $grid[$i][$j];
            }
        }

        // Step 2: Shift columns upward
        for ($j = 0; $j < $n; $j++) {
            for ($i = 0; $i < $n; $i++) {

                $newRow = ($i - $colShift[$j] + $n) % $n;

                $result[$newRow][$j] = $temp[$i][$j];
            }
        }

        return $result;
    }
}