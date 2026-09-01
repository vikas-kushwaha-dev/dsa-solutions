class Solution:
    def runningSum(self, nums: List[int]) -> List[int]:
        curr = 0
        for i in range(len(nums)):
            nums[i] += curr
            curr = nums[i]
        return nums