
def maxindex(dist, n):
	mi = 0
	for i in range(n):
		if (dist[i] > dist[mi]):
			mi = i
	return mi

def selectKcities(n, weights, k):
	dist = [0]*n
	centers = []

	for i in range(n):
		dist[i] = 10**9
	max = 0
	for i in range(k):
		centers.append(max)
		for j in range(n):
			dist[j] = min(dist[j], weights[max][j])

		max = maxindex(dist, n)

	print(dist[max])
	for i in centers:
		print(i, end = " ")

