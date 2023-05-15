import math

def calculate_pi(iterations):
    pi = 0
    for i in range(iterations):
        pi += ((-1) ** i) * (4 / (2 * i + 1))
    return pi

while True:
    try:
        user_input = input("Enter the number of iterations or type 'quit' to exit: ")
        if user_input == "quit":
            print("Bye!")
            break
        iterations = int(user_input)
        if iterations <= 0:
            raise ValueError("Please enter a positive number.")
        break
    except ValueError as e:
        print("Invalid input. Please enter a positive number or type 'quit' to exit.")

if user_input != "quit":
    print(f"The value of pi is {calculate_pi(iterations)}")
