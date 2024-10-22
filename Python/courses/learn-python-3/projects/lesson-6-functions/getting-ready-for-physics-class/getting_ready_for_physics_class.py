train_mass = 22680
train_acceleration = 10
train_distance = 100
bomb_mass = 1

# Turn up the Temperature. Task 1.
def f_to_c (f_temp):
  c_temp = (f_temp - 32) * 5 / 9
  return c_temp

# Turn up the Temperature. Task 2.
f100_in_celsius = f_to_c(100)
print(f"100°F in Celsius is: {f100_in_celsius}")

# Turn up the Temperature. Task 3.
def c_to_f(c_temp):
  f_temp = c_temp * (9 / 5) + 32
  return f_temp

# Turn up the Temperature. Task 4.
c0_in_fahrenheit = c_to_f(0)
print(f"0°C in Fahrenheit is: {c0_in_fahrenheit}")

# Use the Force. Task 5.
def get_force(mass, acceleration):
  return mass * acceleration

# Use the Force. Task 6.
train_force = get_force(train_mass, train_acceleration)

# Use the Force. Task 7.
print(f"The GE train supplies {train_force} Newtons of force.")

# Use the Force. Task 8.
def get_energy(mass, c=3 * 10 ** 8):
  return mass * c ** 2

# Use the Force. Task 9.
bomb_energy = get_energy(bomb_mass)

# Use the Force. Task 10.
print(f"A 1kg bomb supplies {bomb_energy} Joules.")

# Do the Work. Task 11.
def get_work(mass, acceleration, distance):
  return get_force(mass, acceleration) * distance

# Do the Work. Task 12.
train_work = get_work(train_mass, train_acceleration, train_distance)

# Do the Work. Task 13.
print(f"The GE train does {train_work} Joules of work over {train_distance} meters.")