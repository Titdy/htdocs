import turtle

def write_f(x,y, color, pensize, speed):
    t = turtle.Turtle()
    t.color(color)
    t.pensize(pensize)
    t.speed(speed)

    t.penup()
    t.goto(x,y)
    t.pendown()

    t.left(90)
    t.forward(100)
    t.left(90)
    t.forward(45)
    t.back(90)

write_f(0,0, "blue", 5, 1)
turtle.done()
