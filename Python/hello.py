kidsToys = {
    'jason' : 'car', 
    'sarah' : 'train',
    'jess' : 'plane'
}

for k, v in kidsToys.items():
    if k == 'jason':
        kidsToys['jason'] = 'truck'
        
    print(f"The school kid {k} has this toy: {v}")
    print(kidsToys.items())
    

for k in kidsToys.values():
    print(f"{k}")