#!/usr/bin/python
#query used to do effective data formatting
myquery = "SELECT P.P_Name,description_table.description,P.Skills,P.devs_Assigned FROM Project_Ideas AS P LEFT JOIN description_table ON description_table.id=P.id"

# execute SQL query using execute() method.
cursor.execute(myquery)

# Fetch a single row using fetchone() method. used for selection
data = cursor.fetchall()

#print "Database version : %s " % data
projects=list(data)

# disconnect from server
db.close()


for entry in projects:
	#print entry
	print '''
			<tr>
				<!--table data-->

				<!--Project_name-->
				<td>%s</td>

				<!--Description-->
				<td>%s</td>

				<!--skills-->
				<td>%s</td>

				<!--members_assigned-->
				<td>
					<div class="btn-group open">'''%(entry[0],entry[1],entry[2])

print '''
						<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
						Select
						<span class="caret"></span>
						</button>
							<ul class="dropdown-menu">

								<li><input type="checkbox">%s</input></li>
								<li><input type="checkbox" checked>%s</input></li>
							</ul>

					</div>

					<input type="submit" value="Update">
				</td>

			</tr>
			'''%("dev1","dev2")
