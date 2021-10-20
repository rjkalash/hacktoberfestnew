def binary_search(alist, low, high, key):
    """Search key in alist[low... high - 1]."""
    if not low < high:
        return -1
 
    mid = (low + high)//2
    if alist[mid] < key:
        return binary_search(alist, mid + 1, high, key)
    elif alist[mid] > key:
        return binary_search(alist, low, mid, key)
    else:
        return mid
 
 
alist = input('Enter the sorted list of numbers: ')
alist = alist.split()
alist = [int(x) for x in alist]
key = int(input('The number to search for: '))
 
index = binary_search(alist, 0, len(alist), key)
if index < 0:
    print('{} was not found.'.format(key))
else:
    print('{} was found at index {}.'.format(key, index))
