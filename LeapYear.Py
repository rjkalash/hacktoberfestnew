class Calendar:
    def __init__(self, year):
        self.year = year

    def is_leap_year(self):
        return self.year % 400 == 0 or (self.year % 4 == 0 and self.year % 100 != 0)

    def first_day(self, m):
        p = (14-m) // 12
        q = self.year - p
        r = q + q//4 - q//100 + q//400
        s = m + 12*p - 2
        t = (1 + r + (31*s)//12) % 7
        return t

    def print_calendar(self, m):
        month_days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
        if self.is_leap_year() and m == 2:
            days = 29
        else:
            days = month_days[m-1]

        c = 0
        for i in range(self.first_day(m)):
            c += 1
            print('    ', end='')
            
        for i in range(1, days+1):
            print('{:4d}'.format(i), end='')
            c += 1
            if c % 7 == 0:
                print()
        print()

calendar = Calendar(2021)
print(calendar.is_leap_year())
print(calendar.first_day(2))
calendar.print_calendar(2)
