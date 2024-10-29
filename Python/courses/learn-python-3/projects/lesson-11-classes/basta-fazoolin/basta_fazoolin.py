class Business:
  def __init__(self, name, franchises):
    self.name = name
    self.franchises = franchises
  
  def __repr__(self):
    return f"Business: {self.name}, Franchises: {', '.join(str(franchise) for franchise in self.franchises)}"

class Franchise:
  def __init__(self, address, menus):
    self.address = address
    self.menus = menus
  
  def __repr__(self):
    return f"Franchise located at {self.address}"
  
  def available_menus(self, time):
    available = [menu for menu in self.menus if menu.start_time <= time <= menu.end_time]
    return available if available else 'No menus available at this time'

class Menu:
  def __init__(self, name, items, start_time, end_time):
    self.name = name
    self.items = items
    self.start_time = start_time
    self.end_time = end_time

  def __repr__(self):
    return f"{self.name} menu available from {self.start_time}:00 to {self.end_time}:00"
  
  def calculate_bill(self, purchased_items):
    bill = 0
    for item in purchased_items:
      if item in self.items:
        bill += self.items[item]
    return bill

# Brunch menu
brunch_items = {
  'pancakes': 7.50,
  'waffles': 9.00,
  'burger': 11.00,
  'home fries': 4.50,
  'coffee': 1.50,
  'espresso': 3.00,
  'tea': 1.00,
  'mimosa': 10.50,
  'orange juice': 3.50
}

brunch = Menu("Brunch", brunch_items, 11, 16)
print(brunch)

# Early_bird menu
early_bird_items = {
  'salumeria plate': 8.00,
  'salad and breadsticks (serves 2, no refills)': 14.00,
  'pizza with quattro formaggi': 9.00,
  'duck ragu': 17.50,
  'mushroom ravioli (vegan)': 13.50,
  'coffee': 1.50, 'espresso': 3.00
}

early_bird = Menu("Early-bird", early_bird_items, 15, 18)
print(early_bird)

# Dinner menu
dinner_items = {
  'crostini with eggplant caponata': 13.00,
  'caesar salad': 16.00,
  'pizza with quattro formaggi': 11.00,
  'duck ragu': 19.50,
  'mushroom ravioli (vegan)': 13.50,
  'coffee': 2.00,
  'espresso': 3.00
}

dinner = Menu("Dinner", dinner_items, 17, 23)
print(dinner)

# Kids menu
kids_items = {
  'chicken nuggets': 6.50,
  'fusilli with wild mushrooms': 12.00,
  'apple juice': 3.00
}

kids = Menu("Kids", kids_items, 11, 21)
print(kids)
print()

# Breakfast order items
breakfast_order = ["pancakes", "home fries", "coffee"]

# Total bill for breakfast order
bill_for_breakfast_order = brunch.calculate_bill(breakfast_order)
print(f"Total bill for breakfast order: ${bill_for_breakfast_order:.2f}")

# Early-bird order items
early_bird_order = ["salumeria plate", "mushroom ravioli (vegan)"]

# Total bill for early-bird order
bill_for_early_bird_order = early_bird.calculate_bill(early_bird_order)
print(f"Total bill for early-bird order: ${bill_for_early_bird_order:.2f}")
print()

# All menus
menus = [brunch, early_bird, dinner, kids]

# Create franchises
flagship_store = Franchise("1232 West End Road", menus)
new_installment = Franchise("12 East Mulberry Street", menus)
print(flagship_store)
print(new_installment)
print()

# Available menus
print(flagship_store.available_menus(12))
print(flagship_store.available_menus(5))
print()

# Create "Basta Fazoolin' with my Heart" business
basta_fazoolin = Business("Basta Fazoolin' with my Heart", [flagship_store, new_installment])

print(basta_fazoolin)
print()

# Arepas menu
arepas_menu = {
  'arepa pabellon': 7.00,
  'pernil arepa': 8.50,
  'guayanes arepa': 8.00,
  'jamon arepa': 7.50
}

arepas = Menu("Arepas", arepas_menu, 10, 20)

# Create "Take a' Arepa" business
arepas_place = Franchise("189 Fitzgerald Avenue", arepas_menu)
take_arepa = Business("Take a' Arepa", [arepas_place])
print(take_arepa)