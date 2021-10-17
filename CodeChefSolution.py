# link for the problem statement:- https://www.codechef.com/problems/FLOW004

def getFirstAndLastSum(num):
    first=0
    last=num%10
    while(num):
        if(num%10==num):
            first=num
        num = num//10
    print("Sum of first and last digit is:-{0}".format(first+last))


if __name__=='__main__':
  testCases = int(input())
  for i in range(0,testCases):
    number = int(input("Enter any number:- "))
    getFirstAndLastSum(number)
