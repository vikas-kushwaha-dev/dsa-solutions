class Solution:
    def sortedSquares(self, nums: list[int]) -> list[int]:
        length = len(nums)
        pos = []
        neg = []

        for num in nums:
            if num < 0:
                neg.append(num)
            else:
                pos.append(num)

        if len(neg) == 0:
            res = [x * x for x in pos]
            return res
        
        if len(pos) == 0:
            res = [x * x for x in neg]
            res.reverse()
            return res #[x * x for x in neg][::-1]

        neg = [x * x for x in neg][::-1] #sq, reverse
        pos = [x * x for x in pos]
        nSiz,pSiz = len(neg),len(pos)
        res = []

        i = j = 0
        while i < nSiz and j < pSiz:
            if neg[i] < pos[j]:
                res.append(neg[i])
                i += 1
            else:
                res.append(pos[j])
                j += 1
        
        while i < nSiz:
            res.append(neg[i])
            i += 1
        
        while j < pSiz:
            res.append(pos[j])
            j += 1
        
        return res
