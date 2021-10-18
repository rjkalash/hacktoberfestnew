

import time

class Timer:
    def start(self):
        self.initial_time = time.time()
        
    def elapsed_seconds(self):
        return time.time() - self.initial_time
    
    def formatted_time(self, seconds):
        seconds = int(round(seconds, 0))
        minutes = seconds // 60
        seconds = seconds % 60
        return '{:d}:{:02d}'.format(minutes, seconds)

timer = Timer()
timer.start()
input('Enter something: ')
print(timer.elapsed_seconds())
timer2 = Timer()
timer2.start()
input('Enter something else: ')
print(timer2.elapsed_seconds())
print(timer.formatted_time(timer.elapsed_seconds()))
