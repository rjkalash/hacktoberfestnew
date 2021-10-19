class ShoppingCart:
    def __init__(self):
        self.items = []

    def add(self, item):
        self.items.append(item)

    def total(self):
        return sum(item.price for item in self.items)

    def remove_items(self, name):
        self.items = [item for item in self.items if item.name != name]
        
    def __str__(self):
        return '\n'.join(str(item) for item in self.items)
        
cart = ShoppingCart()
cart.add(Item('shirt', 18.99))
cart.add(Item('T-shirt', 22.59))
cart.add(Item('ToyCar', 22400))
cart.add(Item('Brownie', 1.49))
print(cart)
cart.remove_items('shirt')
print(cart)
