class Item:
    def __init__(self, name, price):
        self.name = name
        self.price = price

    def __str__(self):
        return '{:s}, {:.2f}'.format(self.name, self.price)

item = Item('hat', 12.40)
print(item)
