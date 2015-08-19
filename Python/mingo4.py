#Ver4.0, finally I did it!

print("Grego -> Mingo Year Translator")

grego = int(input("What's that year in Grego? "))
mingo = grego - 1911

if mingo >= 0:
	print ("So that year in Mingo year is:", mingo)
else:
	print ("Sorry, in that year ROC was not exist.")
