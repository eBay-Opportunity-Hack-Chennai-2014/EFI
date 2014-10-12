function Image1= hackt(mapstage2,imk)
[threshold, histogram] = Otsu(mapstage2);
[h, w] = size(mapstage2);
mapstage3=mapstage2;

%%%%%%%%%%%% Finding Thrshold Map
for i = 1 : h
    
    for j = 1 : w
        
        if(mapstage2(i,j) < threshold/2+threshold/4)
            
            mapstage3(i,j)=0;
            
        else
            mapstage3(i,j)=255;
            
        end
        
    end
    
end


%imshow(mapstage3);


CC = bwconncomp(mapstage3);
h=CC.ImageSize(1);
w=CC.ImageSize(2);
labeled = labelmatrix(CC);
num=size(unique(labeled))-1;
final=zeros(num(1),1);

for kk=1:num(1)
final(kk,1)=length(find(labeled==kk));
end

[a,b]=max(final);
[c,d]=find(labeled~=b);
%imk=imread(imname);
seg21=ones(size(imk,1),size(imk,2));
if num(1)>=1
for i = 1 :length(c)
     seg21(c(i),d(i))=0;
end
end

CC = bwconncomp(seg21);
h=CC.ImageSize(1);
w=CC.ImageSize(2);
labeled = labelmatrix(CC);
new_coordinates=func(CC);
fin1=1;
Image1=imk(new_coordinates(fin1,2):new_coordinates(fin1,4),new_coordinates(fin1,1):new_coordinates(fin1,3),1:3);

end